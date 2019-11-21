<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\paciente;

/**
 * pacienteSearch represents the model behind the search form of `backend\models\paciente`.
 */
class pacienteSearch extends paciente
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_paciente', 'email', 'cni', 'qtd_filho', 'qtd_familia', 'maior_idade', 'menor_idade', 'pre_escolar', 'universitario', 'segundario', 'trabalhador', 'desempregado', 'ebo', 'tipo_instituicao', 'outros'], 'integer'],
            [['nome', 'apilido', 'data_nascimento', 'naturalidade', 'residencia', 'telefone', 'telemovel', 'nivel_escolaridade', 'outro', 'sexo', 'estado_civil', 'profissao', 'nome_instituicao', 'estudante', 'instituicao_segurado', 'nome_pais', 'morada_pais', 'grau_pais'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = paciente::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_paciente' => $this->id_paciente,
            'email' => $this->email,
            'cni' => $this->cni,
            'qtd_filho' => $this->qtd_filho,
            'qtd_familia' => $this->qtd_familia,
            'maior_idade' => $this->maior_idade,
            'menor_idade' => $this->menor_idade,
            'pre_escolar' => $this->pre_escolar,
            'universitario' => $this->universitario,
            'segundario' => $this->segundario,
            'trabalhador' => $this->trabalhador,
            'desempregado' => $this->desempregado,
            'ebo' => $this->ebo,
            'tipo_instituicao' => $this->tipo_instituicao,
            'outros' => $this->outros,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'apilido', $this->apilido])
            ->andFilterWhere(['like', 'data_nascimento', $this->data_nascimento])
            ->andFilterWhere(['like', 'naturalidade', $this->naturalidade])
            ->andFilterWhere(['like', 'residencia', $this->residencia])
            ->andFilterWhere(['like', 'telefone', $this->telefone])
            ->andFilterWhere(['like', 'telemovel', $this->telemovel])
            ->andFilterWhere(['like', 'nivel_escolaridade', $this->nivel_escolaridade])
            ->andFilterWhere(['like', 'outro', $this->outro])
            ->andFilterWhere(['like', 'sexo', $this->sexo])
            ->andFilterWhere(['like', 'estado_civil', $this->estado_civil])
            ->andFilterWhere(['like', 'profissao', $this->profissao])
            ->andFilterWhere(['like', 'nome_instituicao', $this->nome_instituicao])
            ->andFilterWhere(['like', 'estudante', $this->estudante])
            ->andFilterWhere(['like', 'instituicao_segurado', $this->instituicao_segurado])
            ->andFilterWhere(['like', 'nome_pais', $this->nome_pais])
            ->andFilterWhere(['like', 'morada_pais', $this->morada_pais])
            ->andFilterWhere(['like', 'grau_pais', $this->grau_pais]);

        return $dataProvider;
    }
}
