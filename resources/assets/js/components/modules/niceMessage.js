'use strict';

var niceMessage = function(){
    return {
        message: function(){
            var msg =   '          ....,,'+'\n'+
                        '        .::o::;\'          .....'+'\n'+
                        '       ::::::::        .::::o:::.,'+'\n'+
                        '      .::\' `:::        :::::::\'\'"'+'\n'+
                        '      :::     :       ::\'   `.'+'\n'+
                        '     .:::     :       :\'      ::'+'\n'+
                        '    .:::       :     ,:       `::'+'\n'+
                        '   .\' :        :`. ." :        :::'+'\n'+
                        '  .\' .:        :  :  .:        : :'+'\n'+
                        '  : ::\'        ::. :\' :        : :'+'\n'+
                        '  :: :         :`: :  :        :`:'+'\n'+
                        '  :  :         :  \'\'  :        : \''+'\n'+
                        '_.---:         :___   :        :'+'\n'+
                        '     :        :`   `--:        :'+'\n'+
                        '      : :---: :        : :---: :`---.'+'\n'+
                        '      \'```  \'```      \'\'\'   \'\'\'\'';
            return msg;
        }
    };
}();

module.exports = niceMessage;
module.exports.default = niceMessage;