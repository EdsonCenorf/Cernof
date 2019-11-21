<?php

namespace backend\models;


use Yii;



/**
 * This is the model class for table "paciente".
 *
 * @property int $id_paciente
 * @property string $nome
 * @property string $apilido
 * @property string $data_nascimento
 * @property string $naturalidade
 * @property string $residencia
 * @property string $telefone
 * @property string $telemovel
 * @property string $nivel_escolaridade
 * @property string $outro
 * @property int $email
 * @property int $cni
 * @property string $sexo
 * @property string $estado_civil
 * @property int $qtd_filho
 * @property int $qtd_familia
 * @property int $maior_idade
 * @property int $menor_idade
 * @property int $pre_escolar
 * @property int $universitario
 * @property int $segundario
 * @property int $trabalhador
 * @property int $desempregado
 * @property int $ebo
 * @property string $profissao
 * @property int $tipo_instituicao
 * @property string $nome_instituicao
 * @property string $estudante
 * @property string $instituicao_segurado
 * @property int $outros
 * @property string $nome_pais
 * @property string $morada_pais
 * @property string $grau_pais
 */
class Paciente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'paciente';
       
    }
    
    CONST STATUS_ACTIVE = 1;
    CONST STATUS_INACTIVE = 0;
    CONST STATUS_ACTIVE_STRING = 'Masculino (a)';
    CONST STATUS_INACTIVE_STRING = 'Feminino (a)';


    CONST STATUS_SOLTIRO = 11;
    CONST STATUS_CASADO = 12;
    CONST STATUS_DEVORCIADO = 13;
    CONST STATUS_VIUVO = 14;
    CONST STATUS_SOLTIRO_STRING = 'Solteiro (a)';
    CONST STATUS_CASADO_STRING = 'Casado (a)';
    CONST STATUS_DEVORCIADO_STRING = 'Devorciado (a)';
    CONST STATUS_VIUVO_STRING = 'Viúvo (a)';



    CONST STATUS_PUBLIC = 14;
    CONST STATUS_PRIVATE = 15;
    CONST STATUS_OWN= 16;
    CONST STATUS_PUBLIC_STRING = 'Função Pública';
    CONST STATUS_PRIVATE_STRING = 'Empresa Privada';
    CONST STATUS_OWN_STRING = 'Conta Propria';

    CONST INSEGUREDWERE_ACTIVE = 1;
    CONST INSEGUREDWERE_INACTIVE = 2;
    CONST INSEGUREDWERE_IMPAR = 3;
    CONST INSEGUREDWERE_ACTIVE_STRING = 'INPS';
    CONST INSEGUREDWERE_INACTIVE_STRING = 'GARANTIA';
    CONST INSEGUREDWERE_IMPAR_STRING = 'IMPAR';
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            
            //[[ 'telefone', 'telemovel', 'nivel_escolaridade', 'outro', 'email',  'qtd_filho', 'maior_idade', 'menor_idade', 'pre_escolar', 'universitario', 'segundario', 'trabalhador', 'desempregado', 'ebo', 'profissao', 'tipo_instituicao', 'nome_instituicao', 'estudante', 'instituicao_segurado', 'outros', 'nome_pais', 'morada_pais', 'grau_pais'], 'required'],
            [['email', 'cni', 'qtd_filho', 'qtd_familia', 'maior_idade', 'menor_idade', 'pre_escolar', 'universitario', 'segundario', 'trabalhador', 'desempregado', 'ebo', 'tipo_instituicao', 'outros'], 'integer'],
            [['nome', 'nome_pais'], 'string', 'max' => 100],
            [['apilido'], 'string', 'max' => 11],
            [['data_nascimento', 'telefone', 'telemovel', 'nivel_escolaridade', 'outro', 'sexo', 'profissao', 'nome_instituicao', 'morada_pais', 'grau_pais'], 'string', 'max' => 50],
            [['naturalidade', 'residencia'], 'string', 'max' => 60],
            [['estado_civil'], 'string', 'max' => 20],
            [['estudante', 'instituicao_segurado'], 'string', 'max' => 30],
            [['nome', 'apilido', 'data_nascimento', 'naturalidade', 'residencia','cni', 'sexo', 'estado_civil','qtd_familia'], 'required'],
        ];
    }
    public function getStatusSexo()
    {
        return [
            self::STATUS_INACTIVE => self::STATUS_INACTIVE_STRING,
            self::STATUS_ACTIVE => self::STATUS_ACTIVE_STRING,

           
        ];
    }
    public function getStatusCivil()
    {
        return [
            self::STATUS_SOLTIRO => self::STATUS_SOLTIRO_STRING,
            self::STATUS_CASADO => self::STATUS_CASADO_STRING,
            self::STATUS_DEVORCIADO => self::STATUS_DEVORCIADO_STRING,
            self::STATUS_VIUVO => self::STATUS_VIUVO_STRING,
        ];
    }
    public function getStatusCompany()
    {
        return [
            self::STATUS_PUBLIC => self::STATUS_PUBLIC_STRING,
            self::STATUS_PRIVATE => self::STATUS_PRIVATE_STRING,
            self::STATUS_OWN => self::STATUS_OWN_STRING,
            
        ];
    }
    
    public function getStatusInsuredWere()
    {
        return [
            self:: INSEGUREDWERE_INACTIVE => self:: INSEGUREDWERE_INACTIVE_STRING,
            self:: INSEGUREDWERE_ACTIVE => self:: INSEGUREDWERE_ACTIVE_STRING,
            self:: INSEGUREDWERE_IMPAR => self:: INSEGUREDWERE_IMPAR_STRING,
           
        ];
    }
    
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_paciente' => 'Id Paciente',
            'nome' => 'Nome Completo *',
            'apilido' => 'Alcunha *',
            'data_nascimento' => 'Data Nascimento *',
            'naturalidade' => 'Naturalidade *',
            'residencia' => 'Residencia *',
            'telefone' => 'Telefone',
            'telemovel' => 'Telemovel',
            'nivel_escolaridade' => 'Nivel Escolaridade',
            'outro' => 'Outro',
            'email' => 'Email',
            'cni' => 'Cni *',
            'sexo' => 'Sexo *',
            'estado_civil' => 'Estado Civil *',
            'qtd_filho' => 'Qtd Filho',
            'qtd_familia' => 'Qtd Familia *',
            'maior_idade' => 'Maior Idade',
            'menor_idade' => 'Menor Idade',
            'pre_escolar' => 'Pre Escolar',
            'universitario' => 'Universitario',
            'segundario' => 'Segundario',
            'trabalhador' => 'Trabalhador',
            'desempregado' => 'Desempregado',
            'ebo' => 'Ebo',
            'profissao' => 'Profissao *',
            'tipo_instituicao' => 'Tipo Instituicao',
            'nome_instituicao' => 'Nome Instituicao',
            'estudante' => 'Estudante',
            'instituicao_segurado' => 'Instituicao Segurado',
            'outros' => 'Outros',
            'nome_pais' => 'Nome Pais',
            'morada_pais' => 'Morada Pais',
            'grau_pais' => 'Grau Pais',
        ];
    }
}
