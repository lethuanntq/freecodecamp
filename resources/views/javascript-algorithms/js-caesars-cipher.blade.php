<hed>

</hed>
<body>
<button onclick="getString()">Click</button>
<a id="show-string"></a>
</body>
<script>
    function getString(){
        let newCharUnicode = '';
        let result = [];
        let string = 'SERR PBQR PNZC !+/';
        let calculator = ''
        let charRot13 = '';
        let char = '';
        for(i= 0; i < string.length; i++) {
            newCharUnicode = string.charCodeAt(i);
            if(newCharUnicode < 65 || newCharUnicode > 90){
                charRot13 = newCharUnicode
            } else {
                charRot13 = newCharUnicode + 13
            }

            if( charRot13 > 90) {
                charRot13 = charRot13 - 90  + 64
            }

            char = String.fromCharCode(charRot13)
            console.log(calculator, charRot13);
            result.push(char)
        }

        alert(result.toString().replaceAll(',', ''))
    }
</script>
