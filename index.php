<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ListaUFs</title>
</head>
<body>
    <header>
        <h1>Lista Sintética de UFs do Brasil</h1>
    </header>
    <main>
        <?php
        $estados = [
            'AC' => array(
               // 'Bandeira' => <img src="https://pt.wikipedia.org/wiki/Unidades_federativas_do_Brasil#/media/Ficheiro:Bandeira_do_Acre.svg" alt="Bandeira do Acre">
                'Unidade Federativa' => 'Acre',
                'Sede de Governo' => 'Rio Branco',
                'Área(km²)' => '164 122,2',
                'População (2014)' => '795 145',
                'Densidade (2005)' => '4,30',
                'PIB (2015)' => '13 662 000',
                '% total (2015)' => '0,2',
                'PIB per capita (R$) (2015)' => '16 953,46',
                'IDH (2010)' => ' 0,663',
                'Alfabetização (2016)' => ' 86,9%',
                'Mortalidade Infantil (2016)' => '17,0 // 1000',
                'Expectativa de vida (2016)' => '73,9 anos'
            ),

            'AL' => array(
               // 'Bandeira' => <img src="https://pt.wikipedia.org/wiki/Unidades_federativas_do_Brasil#/media/Ficheiro:Bandeira_de_Alagoas.svg" alt="Bandeira do Alagoas">
                'Unidade Federativa' => 'Alagoas',
                'Sede de Governo' => 'Maceió',
                'Área(km²)' => '27 767,7',
                'População (2014)' => '3 327 551',
                'Densidade (2005)' => '108,61',
                'PIB (2015)' => '46 364 000',
                '% total (2015)' => '0,8',
                'PIB per capita (R$) (2015)' => '13 877,53',
                'IDH (2010)' => '0,631',
                'Alfabetização (2016)' => '80,6%',
                'Mortalidade Infantil (2016)' => '19.5 / 1000',
                'Expectativa de vida (2016)' => '71,6 anos'
            ),


            'AP' => array(
               // 'Bandeira' => <img src="https://pt.wikipedia.org/wiki/Unidades_federativas_do_Brasil#/media/Ficheiro:Bandeira_do_Amap%C3%A1.svg" alt="Bandeira do Amapá">
                'Unidade Federativa' => 'Amapá',
                'Sede de Governo' => 'Macapá',
                'Área(km²)' => '142 814,6',
                'População (2014)' => '756 500',
                'Densidade (2005)' => '4,16',
                'PIB (2015)' => '13 861 000',
                '% total (2015)' => '0,2',
                'PIB per capita (R$) (2015)' => '18 079,54',
                'IDH (2010)' => '0,708',
                'Alfabetização (2016)' => '95%',
                'Mortalidade Infantil (2016)' => '23,2 / 1000',
                'Expectativa de vida (2016)' => '73,9 anos'
            ),


            'AM' => array(
              //  'Bandeira' => <img src="https://pt.wikipedia.org/wiki/Unidades_federativas_do_Brasil#/media/Ficheiro:Bandeira_do_Amazonas.svg" alt="Bandeira do Amazonas">
                'Unidade Federativa' => 'Amazonas',
                'Sede de Governo' => 'Manaus',
                'Área(km²)' => '1 570 745,7',
                'População (2014)' => '3 893 763',
                'Densidade (2005)' => '2,05',
                'PIB (2015)' => '86 560 000',
                '% total (2015)' => '1,4',
                'PIB per capita (R$) (2015)' => '21 978,95',
                'IDH (2010)' => '0,674',
                'Alfabetização (2016)' => '93,1%',
                'Mortalidade Infantil (2016)' => '18,2 / 1000',
                'Expectativa de vida (2016)' => '71,9 anos'
            ),

            'BA' => array(
                //'Bandeira' => <img src="https://pt.wikipedia.org/wiki/Unidades_federativas_do_Brasil#/media/Ficheiro:Bandeira_da_Bahia.svg" alt="Bandeira da Bahia">
                'Unidade Federativa' => 'Bahia',
                'Sede de Governo' => 'Salvador',
                'Área(km²)' => '564 692,7',
                'População (2014)' => '15 150 143',
                'Densidade (2005)' => '24,46',
                'PIB (2015)' => '245 025 000',
                '% total (2015)' => '4,1',
                'PIB per capita (R$) (2015)' => '16 115,89',
                'IDH (2010)' => '0,660',
                'Alfabetização (2016)' => '87%',
                'Mortalidade Infantil (2016)' => '17,3 / 1000 ',
                'Expectativa de vida (2016)' => '73,5 anos'
            ),

            'CE' => array(
              //  'Bandeira' => <img src="https://pt.wikipedia.org/wiki/Unidades_federativas_do_Brasil#/media/Ficheiro:Bandeira_do_Cear%C3%A1.svg" alt="Bandeira do Ceará">
                'Unidade Federativa' => 'Ceará',
                'Sede de Governo' => 'Fortaleza',
                'Área(km²)' => '148 825,6',
                'População (2014)' => '8 867 448',
                'Densidade (2005)' => '54,40',
                'PIB (2015)' => '130 621 000',
                '% total (2015)' => '2,2',
                'PIB per capita (R$) (2015)' => '14 669,14',
                'IDH (2010)' => '0,682',
                'Alfabetização (2016)' => '84,8%',
                'Mortalidade Infantil (2016)' => '14,4 / 1000',
                'Expectativa de vida (2016)' => '73,8 anos'
            ),

            'DF' => array(
               // 'Bandeira' => <img src="https://pt.wikipedia.org/wiki/Unidades_federativas_do_Brasil#/media/Ficheiro:Bandeira_do_Distrito_Federal_(Brasil).svg" alt="Bandeira do Distrito Federal">
                'Unidade Federativa' => 'Distrito Federal',
                'Sede de Governo' => 'Brasília',
                'Área(km²)' => '5 882,1',
                'População (2014)' => '2 867 869',
                'Densidade (2005)' => '400,73',
                'PIB (2015)' => '215 613 000',
                '% total (2015)' => '3,6',
                'PIB per capita (R$) (2015)' => '73 971,05',
                'IDH (2010)' => '0,824',
                'Alfabetização (2016)' => '97,4%',
                'Mortalidade Infantil (2016)' => '10,5 / 1000',
                'Expectativa de vida (2016)' => '78,1 anos'
            ),


            'ES' => array(
              //  'Bandeira' => <img src="https://pt.wikipedia.org/wiki/Unidades_federativas_do_Brasil#/media/Ficheiro:Bandeira_do_Esp%C3%ADrito_Santo.svg" alt="Bandeira do Espírito Santo">
                'Unidade Federativa' => 'Espírito Santo',
                'Sede de Governo' => 'Vitória',
                'Área(km²)' => '46 077,5',
                'População (2014)' => '3 894 899',
                'Densidade (2005)' => '73,97',
                'PIB (2015)' => '120 363 000',
                '% total (2015)' => '2',
                'PIB per capita (R$) (2015)' => '30 627,45',
                'IDH (2010)' => '0,740',
                'Alfabetização (2016)' => '93,8%',
                'Mortalidade Infantil (2016)' => '8,8 / 1000',
                'Expectativa de vida (2016)' => ' 78,2 anos' 
            ),


            'GO' => array(
             //   'Bandeira' => <img src="https://pt.wikipedia.org/wiki/Unidades_federativas_do_Brasil#/media/Ficheiro:Flag_of_Goi%C3%A1s.svg" alt="Bandeira de Goiás">
                'Unidade Federativa' => 'Goiás',
                'Sede de Governo' => 'Goiânia',
                'Área(km²)' => '340 086,7',
                'População (2014)' => '6 551 322',
                'Densidade (2005)' => '16,52',
                'PIB (2015)' => '173 632 000',
                '% total (2015)' => '2,6',
                'PIB per capita (R$) (2015)' => '26 265,32',
                'IDH (2010)' => '0,735',
                'Alfabetização (2016)' => '93,5%',
                'Mortalidade Infantil (2016)' => '14,9 / 1000',
                'Expectativa de vida (2016)' => '74,2 anos ' 
            ),

            'MA' => array(
              //  'Bandeira' => <img src="https://pt.wikipedia.org/wiki/Unidades_federativas_do_Brasil#/media/Ficheiro:Bandeira_do_Maranh%C3%A3o.svg" alt="Bandeira do Maranhão">
                'Unidade Federativa' => 'Maranhão',
                'Sede de Governo' => 'São Luís',
                'Área(km²)' => '331 983,3',
                'População (2014)' => '6 861 924',
                'Densidade (2005)' => '18,38',
                'PIB (2015)' => '78 475 000',
                '% total (2015)' => '1,3',
                'PIB per capita (R$) (2015)' => '11 366,23',
                'IDH (2010)' => '0,639',
                'Alfabetização (2016)' => '83,3%',
                'Mortalidade Infantil (2016)' => '21,3 / 1000',
                'Expectativa de vida (2016)' => '70,6 anos' 
            ),

            'MT' => array(
              //  'Bandeira' => <img src="https://pt.wikipedia.org/wiki/Unidades_federativas_do_Brasil#/media/Ficheiro:Bandeira_de_Mato_Grosso.svg" alt="Bandeira do Mato Grosso">
                'Unidade Federativa' => 'Mato Grosso',
                'Sede de Governo' => 'Cuiabá',
                'Área(km²)' => '903 357,9',
                'População (2014)' => '3 236 578',
                'Densidade (2005)' => '3,10',
                'PIB (2015)' => '107 418 000',
                '% total (2015)' => '1,8',
                'PIB per capita (R$) (2015)' => '32 894,96',
                'IDH (2010)' => '0,725',
                'Alfabetização (2016)' => '93,5%',
                'Mortalidade Infantil (2016)' => '16,9 / 1000',
                'Expectativa de vida (2016)' => '74,2 anos' 
            ),

            'MS' => array(
             //   'Bandeira' => <img src="https://pt.wikipedia.org/wiki/Unidades_federativas_do_Brasil#/media/Ficheiro:Bandeira_de_Mato_Grosso_do_Sul.svg" alt="Bandeira do Mato Grosso do Sul">
                'Unidade Federativa' => 'Mato Grosso do Sul',
                'Sede de Governo' => 'Campo Grande',
                'Área(km²)' => '357 125,0',
                'População (2014)' => '2 630 098',
                'Densidade (2005)' => '6,34',
                'PIB (2015)' => '83 082 000',
                '% total (2015)' => '1,4',
                'PIB per capita (R$) (2015)' => '31 337,22',
                'IDH (2010)' => '0,729',
                'Alfabetização (2016)' => '93,7%',
                'Mortalidade Infantil (2016)' => '14,0 / 1000',
                'Expectativa de vida (2016)' => '75,5 anos' 
            ),

            'MG' => array(
               // 'Bandeira' => <img src="https://pt.wikipedia.org/wiki/Unidades_federativas_do_Brasil#/media/Ficheiro:Bandeira_de_Minas_Gerais.svg" alt="Bandeira de Minas Gerais">
                'Unidade Federativa' => 'Minas Gerais',
                'Sede de Governo' => 'Belo Horizonte',
                'Área(km²)' => '586 528,3',
                'População (2014)' => '20 777 672',
                'Densidade (2005)' => '32,79',
                'PIB (2015)' => '519 326 000',
                '% total (2015)' => '8,7',
                'PIB per capita (R$) (2015)' => '24 884,94',
                'IDH (2010)' => '0,731',
                'Alfabetização (2016)' => '93,8%',
                'Mortalidade Infantil (2016)' => '10,9 / 1000',
                'Expectativa de vida (2016)' => '77,2 anos' 
            ),

            'PA' => array(
              //  'Bandeira' => <img src="https://pt.wikipedia.org/wiki/Unidades_federativas_do_Brasil#/media/Ficheiro:Bandeira_do_Par%C3%A1.svg" alt="Bandeira do Pará">
                'Unidade Federativa' => 'Pará',
                'Sede de Governo' => 'Belém',
                'Área(km²)' => '1 247 689,5',
                'População (2014)' => '8 101 180',
                'Densidade (2005)' => '5,58',
                'PIB (2015)' => '130 883 000',
                '% total (2015)' => '2,2',
                'PIB per capita (R$) (2015)' => '16 009,98',
                'IDH (2010)' => '0,646',
                'Alfabetização (2016)' => '90,7%',
                'Mortalidade Infantil (2016)' => '16,6 / 1000',
                'Expectativa de vida (2016)' => '72,1 anos' 
            ),

            'PB' => array(
              //  'Bandeira' => <img src="https://pt.wikipedia.org/wiki/Unidades_federativas_do_Brasil#/media/Ficheiro:Bandeira_da_Para%C3%ADba.svg" alt="Bandeira da Paraíba">
                'Unidade Federativa' => 'Paraíba',
                'Sede de Governo' => 'João Pessoa',
                'Área(km²)' => '56 439,8',
                'População (2014)' => '3 950 359',
                'Densidade (2005)' => '63,71',
                'PIB (2015)' => '56 140 000',
                '% total (2015)' => '0,9',
                'PIB per capita (R$) (2015)' => '14 133,32',
                'IDH (2010)' => '0,658',
                'Alfabetização (2016)' => '83,7%',
                'Mortalidade Infantil (2016)' => '16,1 / 1000',
                'Expectativa de vida (2016)' => '73,2 anos' 
            ),

            'PR' => array(
              //  'Bandeira' => <img src="https://pt.wikipedia.org/wiki/Unidades_federativas_do_Brasil#/media/Ficheiro:Bandeira_do_Paran%C3%A1.svg" alt="Bandeira do Paraná">
                'Unidade Federativa' => 'Paraná',
                'Sede de Governo' => 'Curitiba',
                'Área(km²)' => '199 314,9',
                'População (2014)' => '11 112 062',
                'Densidade (2005)' => '51,48',
                'PIB (2015)' => '376 960 000',
                '% total (2015)' => '6,3',
                'PIB per capita (R$) (2015)' => '33 768,62',
                'IDH (2010)' => '0,749',
                'Alfabetização (2016)' => '95,5%',
                'Mortalidade Infantil (2016)' => '9,3/1000',
                'Expectativa de vida (2016)' => '77,1 anos' 
            ),

            'PE' => array(
                'Unidade Federativa' => 'Pernambuco',
                'Sede de Governo' => 'Recife',
                'Área(km²)' => '98 311,6',
                'População (2014)' => '9 297 861',
                'Densidade (2005)' => '85,58',
                'PIB (2015)' => '156 955 000',
                '% total (2015)' => '2,6',
                'PIB per capita (R$) (2015)' => '16 795,34',
                'IDH (2010)' => '0,673',
                'Alfabetização (2016)' => '87,2%',
                'Mortalidade Infantil (2016)' => '12,7 / 1000 ',
                'Expectativa de vida (2016)' => '73,9 anos' 
            ),

            'PI' => array(
                'Unidade Federativa' => 'Piauí',
                'Sede de Governo' => 'Teresina',
                'Área(km²)' => '251 529,2',
                'População (2014)' => '3 198 185',
                'Densidade (2005)' => '11,95',
                'PIB (2015)' => '39 148 000',
                '% total (2015)' => '0,7',
                'PIB per capita (R$) (2015)' => '12 218,51',
                'IDH (2010)' => '0,646',
                'Alfabetização (2016)' => '82,8%',
                'Mortalidade Infantil (2016)' => '19,1 / 1000',
                'Expectativa de vida (2016)' => '71,1 anos' 
            ),

            'RJ' => array(
                'Unidade Federativa' => 'Rio de Janeiro',
                'Sede de Governo' => 'Rio de Janeiro',
                'Área(km²)' => '43 696,1',
                'População (2014)' => '16 497 395',
                'Densidade (2005)' => '352,05',
                'PIB (2015)' => '659 137 000',
                '% total (2015)' => '11',
                'PIB per capita (R$) (2015)' => '39 826,95',
                'IDH (2010)' => '0,761',
                'Alfabetização (2016)' => '97,3%',
                'Mortalidade Infantil (2016)' => '11,5 / 1000',
                'Expectativa de vida (2016)' => '76,2 anos' 
            ),

            'RN' => array(
                'Unidade Federativa' => 'Rio Grande do Norte',
                'Sede de Governo' => 'Natal',
                'Área(km²)' => '52 796,8',
                'População (2014)' => '3 418 550',
                'Densidade (2005)' => '56,88',
                'PIB (2015)' => '57 250 000',
                '% total (2015)' => '1',
                'PIB per capita (R$) (2015)' => ' 16 631,86',
                'IDH (2010)' => '0,684',
                'Alfabetização (2016)' => '85,3%',
                'Mortalidade Infantil (2016)' => ' 14,7 / 1000',
                'Expectativa de vida (2016)' => '75,7 anos' 
            ),

            'RS' => array(
                'Unidade Federativa' => 'Rio Grande do Sul',
                'Sede de Governo' => 'Porto Alegre',
                'Área(km²)' => '281 748,5',
                'População (2014)' => '11 228 091',
                'Densidade (2005)' => '38,49',
                'PIB (2015)' => '381 985 000',
                '% total (2015)' => '6,4',
                'PIB per capita (R$) (2015)' => '33 960,36',
                'IDH (2010)' => '0,746',
                'Alfabetização (2016)' => '96,8%',
                'Mortalidade Infantil (2016)' => '9,6 / 1000',
                'Expectativa de vida (2016)' => '77,8 anos' 
            ),

            'RO' => array(
                'Unidade Federativa' => 'Rondônia',
                'Sede de Governo' => 'Porto Velho',
                'Área(km²)' => '237 576,2',
                'População (2014)' => '1 755 015',
                'Densidade (2005)' => '6,46',
                'PIB (2015)' => '36 563 000',
                '% total (2015)' => '0,6',
                'PIB per capita (R$) (2015)' => '20 677,95',
                'IDH (2010)' => '0,690',
                'Alfabetização (2016)' => '93,3%',
                'Mortalidade Infantil (2016)' => '20,0 / 1000',
                'Expectativa de vida (2016)' => '71,3 anos' 
            ),

            'RR' => array(
                'Unidade Federativa' => 'Roraima',
                'Sede de Governo' => 'Boa Vista',
                'Área(km²)' => '224 299,0',
                'População (2014)' => '500 826',
                'Densidade (2005)' => '1,74',
                'PIB (2015)' => '10 354 000',
                '% total (2015)' => '0,2',
                'PIB per capita (R$) (2015)' => '20 476,71',
                'IDH (2010)' => '0,707',
                'Alfabetização (2016)' => '93,4%',
                'Mortalidade Infantil (2016)' => '17,2 / 1000',
                'Expectativa de vida (2016)' => '71,5 anos' 
            ),

            'SC' => array(
                'Unidade Federativa' => 'Santa Catarina',
                'Sede de Governo' => 'Florianópolis',
                'Área(km²)' => '95 346,2',
                'População (2014)' => '6 734 568',
                'Densidade (2005)' => '61,53',
                'PIB (2015)' => '249 073 000',
                '% total (2015)' => '4,2',
                'PIB per capita (R$) (2015)' => '36 525,28',
                'IDH (2010)' => '0,774',
                'Alfabetização (2016)' => '97,2%',
                'Mortalidade Infantil (2016)' => '9,2 / 1000',
                'Expectativa de vida (2016)' => '79,1 anos' 
            ),

            'SP' => array(
                'Unidade Federativa' => 'São Paulo',
                'Sede de Governo' => 'São Paulo',
                'Área(km²)' => '248 209,4',
                'População (2014)' => '44 169 350',
                'Densidade (2005)' => '162,93',
                'PIB (2015)' => '1 939 890 000',
                '% total (2015)' => '32,4',
                'PIB per capita (R$) (2015)' => '43 694,68',
                'IDH (2010)' => '0,783',
                'Alfabetização (2016)' => '97,2%',
                'Mortalidade Infantil (2016)' => '9,9 / 1000',
                'Expectativa de vida (2016)' => '78,1 anos' 
            ),

            'SE' => array(
                'Unidade Federativa' => 'Sergipe',
                'Sede de Governo' => 'Aracaju',
                'Área(km²)' => '21 910,3',
                'População (2014)' => '2 227 294',
                'Densidade (2005)' => '89,81',
                'PIB (2015)' => '38 554 000',
                '% total (2015)' => '0,6',
                'PIB per capita (R$) (2015)' => '17 189,28',
                'IDH (2010)' => '0,665',
                'Alfabetização (2016)' => '85,3%',
                'Mortalidade Infantil (2016)' => '16,2 / 1000',
                'Expectativa de vida (2016)' => '72,7 anos' 
            ),

            'TO' => array(
                'Unidade Federativa' => 'Tocantins',
                'Sede de Governo' => 'Palmas',
                'Área(km²)' => '277 620,9',
                'População (2014)' => '1 502 759',
                'Densidade (2005)' => '4,70',
                'PIB (2015)' => '28 930 000',
                '% total (2015)' => '0,5',
                'PIB per capita (R$) (2015)' => '19 094,16',
                'IDH (2010)' => '0,699',
                'Alfabetização (2016)' => '89,6%',
                'Mortalidade Infantil (2016)' => '15,8 / 1000',
                'Expectativa de vida (2016)' => '73,4 anos' 
            )

        ]
        ?>
    </main>
    <footer>
        <p>&copy;2023 - Giovanna Cordeiro</p>
    </footer>
</body>
</html>