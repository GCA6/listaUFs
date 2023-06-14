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
                'Unidade Federativa' => ' ',
                'Sede de Governo' => ' ',
                'Área(km²)' => ' ',
                'População (2014)' => ' ',
                'Densidade (2005)' => ' ',
                'PIB (2015)' => ' ',
                '% total (2015)' => ' ',
                'PIB per capita (R$) (2015)' => ' ',
                'IDH (2010)' => ' ',
                'Alfabetização (2016)' => ' ',
                'Mortalidade Infantil (2016)' => ' ',
                'Expectativa de vida (2016)' => ' '; 
            );

            'AL' => array(
                'Unidade Federativa' => ' ',
                'Sede de Governo' => ' ',
                'Área(km²)' => ' ',
                'População (2014)' => ' ',
                'Densidade (2005)' => ' ',
                'PIB (2015)' => ' ',
                '% total (2015)' => ' ',
                'PIB per capita (R$) (2015)' => ' ',
                'IDH (2010)' => ' ',
                'Alfabetização (2016)' => ' ',
                'Mortalidade Infantil (2016)' => ' ',
                'Expectativa de vida (2016)' => ' '; 
            );


            'AP' => array(
                'Unidade Federativa' => ' ',
                'Sede de Governo' => ' ',
                'Área(km²)' => ' ',
                'População (2014)' => ' ',
                'Densidade (2005)' => ' ',
                'PIB (2015)' => ' ',
                '% total (2015)' => ' ',
                'PIB per capita (R$) (2015)' => ' ',
                'IDH (2010)' => ' ',
                'Alfabetização (2016)' => ' ',
                'Mortalidade Infantil (2016)' => ' ',
                'Expectativa de vida (2016)' => ' '; 
            );


            'AM' => array(
                'Unidade Federativa' => ' ',
                'Sede de Governo' => ' ',
                'Área(km²)' => ' ',
                'População (2014)' => ' ',
                'Densidade (2005)' => ' ',
                'PIB (2015)' => ' ',
                '% total (2015)' => ' ',
                'PIB per capita (R$) (2015)' => ' ',
                'IDH (2010)' => ' ',
                'Alfabetização (2016)' => ' ',
                'Mortalidade Infantil (2016)' => ' ',
                'Expectativa de vida (2016)' => ' '; 
            );

            'BA' => array(
                'Unidade Federativa' => ' ',
                'Sede de Governo' => ' ',
                'Área(km²)' => ' ',
                'População (2014)' => ' ',
                'Densidade (2005)' => ' ',
                'PIB (2015)' => ' ',
                '% total (2015)' => ' ',
                'PIB per capita (R$) (2015)' => ' ',
                'IDH (2010)' => ' ',
                'Alfabetização (2016)' => ' ',
                'Mortalidade Infantil (2016)' => ' ',
                'Expectativa de vida (2016)' => ' '; 
            );

            'CE' => array(
                'Unidade Federativa' => ' ',
                'Sede de Governo' => ' ',
                'Área(km²)' => ' ',
                'População (2014)' => ' ',
                'Densidade (2005)' => ' ',
                'PIB (2015)' => ' ',
                '% total (2015)' => ' ',
                'PIB per capita (R$) (2015)' => ' ',
                'IDH (2010)' => ' ',
                'Alfabetização (2016)' => ' ',
                'Mortalidade Infantil (2016)' => ' ',
                'Expectativa de vida (2016)' => ' '; 
            );

            'DF' => array(
                'Unidade Federativa' => ' ',
                'Sede de Governo' => ' ',
                'Área(km²)' => ' ',
                'População (2014)' => ' ',
                'Densidade (2005)' => ' ',
                'PIB (2015)' => ' ',
                '% total (2015)' => ' ',
                'PIB per capita (R$) (2015)' => ' ',
                'IDH (2010)' => ' ',
                'Alfabetização (2016)' => ' ',
                'Mortalidade Infantil (2016)' => ' ',
                'Expectativa de vida (2016)' => ' '; 
            );


            'ES' => array(
                'Unidade Federativa' => ' ',
                'Sede de Governo' => ' ',
                'Área(km²)' => ' ',
                'População (2014)' => ' ',
                'Densidade (2005)' => ' ',
                'PIB (2015)' => ' ',
                '% total (2015)' => ' ',
                'PIB per capita (R$) (2015)' => ' ',
                'IDH (2010)' => ' ',
                'Alfabetização (2016)' => ' ',
                'Mortalidade Infantil (2016)' => ' ',
                'Expectativa de vida (2016)' => ' '; 
            );


            'GO' => array(
                'Unidade Federativa' => ' ',
                'Sede de Governo' => ' ',
                'Área(km²)' => ' ',
                'População (2014)' => ' ',
                'Densidade (2005)' => ' ',
                'PIB (2015)' => ' ',
                '% total (2015)' => ' ',
                'PIB per capita (R$) (2015)' => ' ',
                'IDH (2010)' => ' ',
                'Alfabetização (2016)' => ' ',
                'Mortalidade Infantil (2016)' => ' ',
                'Expectativa de vida (2016)' => ' '; 
            );

            'MA' => array(
                'Unidade Federativa' => ' ',
                'Sede de Governo' => ' ',
                'Área(km²)' => ' ',
                'População (2014)' => ' ',
                'Densidade (2005)' => ' ',
                'PIB (2015)' => ' ',
                '% total (2015)' => ' ',
                'PIB per capita (R$) (2015)' => ' ',
                'IDH (2010)' => ' ',
                'Alfabetização (2016)' => ' ',
                'Mortalidade Infantil (2016)' => ' ',
                'Expectativa de vida (2016)' => ' '; 
            );

            'MT' => array(
                'Unidade Federativa' => ' ',
                'Sede de Governo' => ' ',
                'Área(km²)' => ' ',
                'População (2014)' => ' ',
                'Densidade (2005)' => ' ',
                'PIB (2015)' => ' ',
                '% total (2015)' => ' ',
                'PIB per capita (R$) (2015)' => ' ',
                'IDH (2010)' => ' ',
                'Alfabetização (2016)' => ' ',
                'Mortalidade Infantil (2016)' => ' ',
                'Expectativa de vida (2016)' => ' '; 
            );

            'MS' => array(
                'Unidade Federativa' => ' ',
                'Sede de Governo' => ' ',
                'Área(km²)' => ' ',
                'População (2014)' => ' ',
                'Densidade (2005)' => ' ',
                'PIB (2015)' => ' ',
                '% total (2015)' => ' ',
                'PIB per capita (R$) (2015)' => ' ',
                'IDH (2010)' => ' ',
                'Alfabetização (2016)' => ' ',
                'Mortalidade Infantil (2016)' => ' ',
                'Expectativa de vida (2016)' => ' '; 
            );

            'MG' => array(
                'Unidade Federativa' => ' ',
                'Sede de Governo' => ' ',
                'Área(km²)' => ' ',
                'População (2014)' => ' ',
                'Densidade (2005)' => ' ',
                'PIB (2015)' => ' ',
                '% total (2015)' => ' ',
                'PIB per capita (R$) (2015)' => ' ',
                'IDH (2010)' => ' ',
                'Alfabetização (2016)' => ' ',
                'Mortalidade Infantil (2016)' => ' ',
                'Expectativa de vida (2016)' => ' '; 
            );

            'PA' => array(
                'Unidade Federativa' => ' ',
                'Sede de Governo' => ' ',
                'Área(km²)' => ' ',
                'População (2014)' => ' ',
                'Densidade (2005)' => ' ',
                'PIB (2015)' => ' ',
                '% total (2015)' => ' ',
                'PIB per capita (R$) (2015)' => ' ',
                'IDH (2010)' => ' ',
                'Alfabetização (2016)' => ' ',
                'Mortalidade Infantil (2016)' => ' ',
                'Expectativa de vida (2016)' => ' '; 
            );

            'PB' => array(
                'Unidade Federativa' => ' ',
                'Sede de Governo' => ' ',
                'Área(km²)' => ' ',
                'População (2014)' => ' ',
                'Densidade (2005)' => ' ',
                'PIB (2015)' => ' ',
                '% total (2015)' => ' ',
                'PIB per capita (R$) (2015)' => ' ',
                'IDH (2010)' => ' ',
                'Alfabetização (2016)' => ' ',
                'Mortalidade Infantil (2016)' => ' ',
                'Expectativa de vida (2016)' => ' '; 
            );

            'PR' => array(
                'Unidade Federativa' => ' ',
                'Sede de Governo' => ' ',
                'Área(km²)' => ' ',
                'População (2014)' => ' ',
                'Densidade (2005)' => ' ',
                'PIB (2015)' => ' ',
                '% total (2015)' => ' ',
                'PIB per capita (R$) (2015)' => ' ',
                'IDH (2010)' => ' ',
                'Alfabetização (2016)' => ' ',
                'Mortalidade Infantil (2016)' => ' ',
                'Expectativa de vida (2016)' => ' '; 
            );

            'PE' => array(
                'Unidade Federativa' => ' ',
                'Sede de Governo' => ' ',
                'Área(km²)' => ' ',
                'População (2014)' => ' ',
                'Densidade (2005)' => ' ',
                'PIB (2015)' => ' ',
                '% total (2015)' => ' ',
                'PIB per capita (R$) (2015)' => ' ',
                'IDH (2010)' => ' ',
                'Alfabetização (2016)' => ' ',
                'Mortalidade Infantil (2016)' => ' ',
                'Expectativa de vida (2016)' => ' '; 
            );

            'PI' => array(
                'Unidade Federativa' => ' ',
                'Sede de Governo' => ' ',
                'Área(km²)' => ' ',
                'População (2014)' => ' ',
                'Densidade (2005)' => ' ',
                'PIB (2015)' => ' ',
                '% total (2015)' => ' ',
                'PIB per capita (R$) (2015)' => ' ',
                'IDH (2010)' => ' ',
                'Alfabetização (2016)' => ' ',
                'Mortalidade Infantil (2016)' => ' ',
                'Expectativa de vida (2016)' => ' '; 
            );

            'RJ' => array(
                'Unidade Federativa' => ' ',
                'Sede de Governo' => ' ',
                'Área(km²)' => ' ',
                'População (2014)' => ' ',
                'Densidade (2005)' => ' ',
                'PIB (2015)' => ' ',
                '% total (2015)' => ' ',
                'PIB per capita (R$) (2015)' => ' ',
                'IDH (2010)' => ' ',
                'Alfabetização (2016)' => ' ',
                'Mortalidade Infantil (2016)' => ' ',
                'Expectativa de vida (2016)' => ' '; 
            );

            'RN' => array(
                'Unidade Federativa' => ' ',
                'Sede de Governo' => ' ',
                'Área(km²)' => ' ',
                'População (2014)' => ' ',
                'Densidade (2005)' => ' ',
                'PIB (2015)' => ' ',
                '% total (2015)' => ' ',
                'PIB per capita (R$) (2015)' => ' ',
                'IDH (2010)' => ' ',
                'Alfabetização (2016)' => ' ',
                'Mortalidade Infantil (2016)' => ' ',
                'Expectativa de vida (2016)' => ' '; 
            );

            'RS' => array(
                'Unidade Federativa' => ' ',
                'Sede de Governo' => ' ',
                'Área(km²)' => ' ',
                'População (2014)' => ' ',
                'Densidade (2005)' => ' ',
                'PIB (2015)' => ' ',
                '% total (2015)' => ' ',
                'PIB per capita (R$) (2015)' => ' ',
                'IDH (2010)' => ' ',
                'Alfabetização (2016)' => ' ',
                'Mortalidade Infantil (2016)' => ' ',
                'Expectativa de vida (2016)' => ' '; 
            );

            'RO' => array(
                'Unidade Federativa' => ' ',
                'Sede de Governo' => ' ',
                'Área(km²)' => ' ',
                'População (2014)' => ' ',
                'Densidade (2005)' => ' ',
                'PIB (2015)' => ' ',
                '% total (2015)' => ' ',
                'PIB per capita (R$) (2015)' => ' ',
                'IDH (2010)' => ' ',
                'Alfabetização (2016)' => ' ',
                'Mortalidade Infantil (2016)' => ' ',
                'Expectativa de vida (2016)' => ' '; 
            );

            'RR' => array(
                'Unidade Federativa' => ' ',
                'Sede de Governo' => ' ',
                'Área(km²)' => ' ',
                'População (2014)' => ' ',
                'Densidade (2005)' => ' ',
                'PIB (2015)' => ' ',
                '% total (2015)' => ' ',
                'PIB per capita (R$) (2015)' => ' ',
                'IDH (2010)' => ' ',
                'Alfabetização (2016)' => ' ',
                'Mortalidade Infantil (2016)' => ' ',
                'Expectativa de vida (2016)' => ' '; 
            );

            'SC' => array(
                'Unidade Federativa' => ' ',
                'Sede de Governo' => ' ',
                'Área(km²)' => ' ',
                'População (2014)' => ' ',
                'Densidade (2005)' => ' ',
                'PIB (2015)' => ' ',
                '% total (2015)' => ' ',
                'PIB per capita (R$) (2015)' => ' ',
                'IDH (2010)' => ' ',
                'Alfabetização (2016)' => ' ',
                'Mortalidade Infantil (2016)' => ' ',
                'Expectativa de vida (2016)' => ' '; 
            );

            'SP' => array(
                'Unidade Federativa' => ' ',
                'Sede de Governo' => ' ',
                'Área(km²)' => ' ',
                'População (2014)' => ' ',
                'Densidade (2005)' => ' ',
                'PIB (2015)' => ' ',
                '% total (2015)' => ' ',
                'PIB per capita (R$) (2015)' => ' ',
                'IDH (2010)' => ' ',
                'Alfabetização (2016)' => ' ',
                'Mortalidade Infantil (2016)' => ' ',
                'Expectativa de vida (2016)' => ' '; 
            );

            'SE' => array(
                'Unidade Federativa' => ' ',
                'Sede de Governo' => ' ',
                'Área(km²)' => ' ',
                'População (2014)' => ' ',
                'Densidade (2005)' => ' ',
                'PIB (2015)' => ' ',
                '% total (2015)' => ' ',
                'PIB per capita (R$) (2015)' => ' ',
                'IDH (2010)' => ' ',
                'Alfabetização (2016)' => ' ',
                'Mortalidade Infantil (2016)' => ' ',
                'Expectativa de vida (2016)' => ' '; 
            );

            'TO' => array(
                'Unidade Federativa' => ' ',
                'Sede de Governo' => ' ',
                'Área(km²)' => ' ',
                'População (2014)' => ' ',
                'Densidade (2005)' => ' ',
                'PIB (2015)' => ' ',
                '% total (2015)' => ' ',
                'PIB per capita (R$) (2015)' => ' ',
                'IDH (2010)' => ' ',
                'Alfabetização (2016)' => ' ',
                'Mortalidade Infantil (2016)' => ' ',
                'Expectativa de vida (2016)' => ' '; 
            );

        ]
        ?>
    </main>
    <footer>
        <p>&copy;2023 - Giovanna Cordeiro</p>
    </footer>
</body>
</html>