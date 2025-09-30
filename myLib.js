export const potencia = (num, expoente) => {

            let resultado = num
            if(expoente === 0){
                return 1
            }
            for (let a= 1; a < expoente; a++){
                
                resultado=resultado*num
            }
            return resultado
        }