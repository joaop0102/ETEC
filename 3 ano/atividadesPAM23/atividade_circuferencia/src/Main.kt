import kotlin.math.PI

fun calcularAreaCircunferencia(raio: Double): Double {
    return PI * raio * raio
}

fun main() {
    val raio = 5.0
    val areaCircunferencia = calcularAreaCircunferencia(raio)
    println("Área da circunferência: $areaCircunferencia")
}
