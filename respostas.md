1- Uma interface define os métodos que uma classe deve implementar e não define como esses métodos devem ser implementados. No exemplo de código apresentado, a interface iDaoModeCrud define quatro métodos: create, read, update e delete. Qualquer classe que implemente essa interface deve implementar esses quatro métodos, mas a forma como eles são implementados é deixada para cada classe específica.

2- No exemplo de código apresentado, a interface iDaoModeCrud define quatro métodos: create, read, update e delete. Qualquer classe que implemente essa interface deve implementar esses quatro métodos, mas a forma como eles são implementados é deixada para cada classe específica.
3- Ambos os métodos bindValue e bindParam da classe PDO são utilizados para definir o valor de um parâmetro de uma instrução SQL. No entanto, há uma diferença importante na forma como eles lidam com o valor passado como parâmetro:
O método bindValue recebe o valor como um parâmetro direto da função. Isso significa que o valor é definido no momento em que o método é chamado, e qualquer alteração posterior no valor não afeta o valor do parâmetro da instrução SQL. O método bindValue pode ser usado com valores literais ou variáveis.
4- function autoload($class) {
    $file = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
}
spl_autoload_register('autoload');
