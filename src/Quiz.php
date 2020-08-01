<?php

class Quiz {
  private $questions;
  private $series;

  public function __construct() {
    $this->questions = [
      1 => [
        "question" => "De manhã, você ...",
        "answers" => [
          "a" => "Acorda cedo e come frutas cortadas metodicamente.",
          "b" => "Sai da cama com o despertador e se prepara para a batalha da semana.",
          "c" => "Só consegue lembrar do seu nome depois do café.",
          "d" => "Levanta e faz café para todos da casa.",
          "e" => "Passa o café e conserta um erro no HTML."
        ]
      ],
      2 => [
        "question" => "Indo para o trabalho você encontra uma senhora idosa caída na rua ...",
        "answers" => [
          "a" => "Ela vai atrapalhar seu horário. Oculte o corpo.",
          "b" => "Levanta a senhora e jura protegê-la com sua vida.",
          "c" => "Ajuda-a, mas questiona sua real identidade.",
          "d" => "Oferece para caminharem juntos até um destino em comum.",
          "e" => "Testa se ela roda bem no Firefox. Não roda."
        ]
      ],
      3 => [
        "question" => "Chega no prédio e o elevador está cheio ...",
        "answers" => [
          "a" => "Convence parte das pessoas a esperarem o próximo.",
          "b" => "Ignora as pessoas no elevador e entra de qualquer forma.",
          "c" => "Você questiona a realidade, as coisas e tudo mais. Sobe de escada.",
          "d" => "Com uma leve intimidação passivo-agressiva, encontra um lugar no elevador.",
          "e" => "Cria um app que mostra a lotação do elevador. Vende o app e fica milionário."
        ]
      ],
      4 => [
        "question" => "Você chega no trabalho e as convenções sociais te obrigam a puxar assunto ...",
        "answers" => [
          "a" => "Fala sobre a política, eleições, como tudo é um absurdo.",
          "b" => "Larga uma frase polêmica e vê uma pequena guerra se formar.",
          "c" => "Puxa um assunto e te lembram que já foi discutido semana passada.",
          "d" => "Sugere que os colegas trabalhem na ideia de um novo projeto.",
          "e" => "Desabafa sobre como odeia PHP. Todo mundo na sala adora PHP."
        ]
      ],
      5 => [
        "question" => "A pauta pegou o dia todo, mas você está indo para casa ...",
        "answers" => [
          "a" => "Vou chamar aqui o meu Uber.",
          "b" => "Pegarei o bus junto com o resto do povo.",
          "c" => "No ponto de ônibus mais uma vez, espero não errar a linha de novo.",
          "d" => "Vou de carro, mas ofereço uma carona para os colegas.",
          "e" => "Acho que descobri uma forma de fazer aquela senhora rodar no Firefox."
        ]
      ]
    ];

    $this->series = [
      "a" => [
        "title" => "House of Cards",
        "description" => "Você é House of Cards: Ataca o problema com método e faz de tudo para resolver a situação."
      ],
      "b" => [
        "title" => "Game of Thrones",
        "description" => "Você é Game of Thrones: Não tem muita delicadeza nas ações, mas resolve o problema de forma prática."
      ],
      "c" => [
        "title" => "Lost",
        "description" => "Você é Lost: Faz as coisas sem ter total certeza se é o caminho certo ou se faz sentido, mas no final dá tudo certo."
      ],
      "d" => [
        "title" => "Breaking Bad",
        "description" => "Você é Breaking Bad: Pra fazer acontecer você toma a liderança, mas sempre contando com seus parceiros."
      ],
      "e" => [
        "title" => "Silicon Valley",
        "description" => "Você é Silicon Valley: Vive a tecnologia o tempo todo e faz disso um mantra para cada situação no dia."
      ],
    ];
  }

  public function shuffle_assoc($array) {
    $keys = array_keys($array);
  
    shuffle($keys);
  
    foreach($keys as $key) {
        $random[$key] = $array[$key];
    }
  
    return $random;
  }

  public function getQuestion($question_number) {
    return $this->questions[$question_number];
  }

  public function getSerie($serie_letter) {
    return $this->series[$serie_letter];
  }

  public function getWinner($arr) {
    $most_occurrences=[];
    $occurrences=0;
    $last_occurrence=0;
    $winner_key='';

    foreach ($arr as $key => $value) {
      if($value['occurrences'] >= $occurrences) {
        $occurrences=$value['occurrences'];
        $most_occurrences[$key]=$value;
      }
    }

    if(!empty($most_occurrences)) {
      foreach ($most_occurrences as $key => $value) {
        if($value['last_ocurrence'] > $last_occurrence) {
          $last_occurrence=$value['last_ocurrence'];
          $winner_key=$key;
        }
      }
    }

    return $this->getSerie($winner_key);
  }
}