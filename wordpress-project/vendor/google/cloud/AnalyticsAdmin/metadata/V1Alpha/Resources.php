<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/resources.proto

namespace GPBMetadata\Google\Analytics\Admin\V1Alpha;

class Resources
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aa72a0a2e676f6f676c652f616e616c79746963732f61646d696e2f7631616c7068612f7265736f75726365732e70726f746f121e676f6f676c652e616e616c79746963732e61646d696e2e7631616c7068611a19676f6f676c652f6170692f7265736f757263652e70726f746f1a1f676f6f676c652f70726f746f6275662f74696d657374616d702e70726f746f1a1e676f6f676c652f70726f746f6275662f77726170706572732e70726f746f228f020a074163636f756e7412110a046e616d651801200128094203e0410312340a0b6372656174655f74696d6518022001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d704203e0410312340a0b7570646174655f74696d6518032001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d704203e0410312190a0c646973706c61795f6e616d651804200128094203e0410212140a0c636f756e7472795f636f646518052001280912140a0764656c657465641806200128084203e041033a3eea413b0a25616e616c797469637361646d696e2e676f6f676c65617069732e636f6d2f4163636f756e7412126163636f756e74732f7b6163636f756e747d228a030a0850726f706572747912110a046e616d651801200128094203e0410312340a0b6372656174655f74696d6518032001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d704203e0410312340a0b7570646174655f74696d6518042001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d704203e0410312130a06706172656e741802200128094203e0410512190a0c646973706c61795f6e616d651805200128094203e04102124b0a11696e6475737472795f63617465676f727918062001280e32302e676f6f676c652e616e616c79746963732e61646d696e2e7631616c7068612e496e64757374727943617465676f727912110a0974696d655f7a6f6e6518072001280912150a0d63757272656e63795f636f646518082001280912140a0764656c657465641809200128084203e041033a42ea413f0a26616e616c797469637361646d696e2e676f6f676c65617069732e636f6d2f50726f7065727479121570726f706572746965732f7b70726f70657274797d22e4020a14416e64726f69644170704461746153747265616d12110a046e616d651801200128094203e04103121c0a0f66697265626173655f6170705f69641802200128094203e0410312340a0b6372656174655f74696d6518032001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d704203e0410312340a0b7570646174655f74696d6518042001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d704203e0410312190a0c7061636b6167655f6e616d651805200128094203e0410512140a0c646973706c61795f6e616d651806200128093a7eea417b0a32616e616c797469637361646d696e2e676f6f676c65617069732e636f6d2f416e64726f69644170704461746153747265616d124570726f706572746965732f7b70726f70657274797d2f616e64726f69644170704461746153747265616d732f7b616e64726f69645f6170705f646174615f73747265616d7d22d4020a10496f734170704461746153747265616d12110a046e616d651801200128094203e04103121c0a0f66697265626173655f6170705f69641802200128094203e0410312340a0b6372656174655f74696d6518032001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d704203e0410312340a0b7570646174655f74696d6518042001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d704203e0410312190a0962756e646c655f69641805200128094206e04105e0410212140a0c646973706c61795f6e616d651806200128093a72ea416f0a2e616e616c797469637361646d696e2e676f6f676c65617069732e636f6d2f496f734170704461746153747265616d123d70726f706572746965732f7b70726f70657274797d2f696f734170704461746153747265616d732f7b696f735f6170705f646174615f73747265616d7d22e8020a0d5765624461746153747265616d12110a046e616d651801200128094203e04103121b0a0e6d6561737572656d656e745f69641802200128094203e04103121c0a0f66697265626173655f6170705f69641803200128094203e0410312340a0b6372656174655f74696d6518042001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d704203e0410312340a0b7570646174655f74696d6518052001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d704203e0410312180a0b64656661756c745f7572691806200128094203e0410512190a0c646973706c61795f6e616d651807200128094203e041023a68ea41650a2b616e616c797469637361646d696e2e676f6f676c65617069732e636f6d2f5765624461746153747265616d123670726f706572746965732f7b70726f70657274797d2f7765624461746153747265616d732f7b7765625f646174615f73747265616d7d22ca010a08557365724c696e6b120c0a046e616d6518012001280912150a0d656d61696c5f6164647265737318022001280912140a0c6469726563745f726f6c65731803200328093a8201ea417f0a26616e616c797469637361646d696e2e676f6f676c65617069732e636f6d2f557365724c696e6b12286163636f756e74732f7b6163636f756e747d2f757365724c696e6b732f7b757365725f6c696e6b7d122b70726f706572746965732f7b70726f70657274797d2f757365724c696e6b732f7b757365725f6c696e6b7d22630a0d4175646974557365724c696e6b120c0a046e616d6518012001280912150a0d656d61696c5f6164647265737318022001280912140a0c6469726563745f726f6c657318032003280912170a0f6566666563746976655f726f6c657318042003280922e8050a1b456e68616e6365644d6561737572656d656e7453657474696e677312110a046e616d651801200128094203e0410312160a0e73747265616d5f656e61626c6564180220012808121f0a12706167655f76696577735f656e61626c65641803200128084203e0410312170a0f7363726f6c6c735f656e61626c6564180420012808121f0a176f7574626f756e645f636c69636b735f656e61626c6564180520012808121d0a15636f6e74656e745f76696577735f656e61626c6564180620012808121b0a13736974655f7365617263685f656e61626c656418072001280812210a19666f726d5f696e746572616374696f6e735f656e61626c656418082001280812200a18766964656f5f656e676167656d656e745f656e61626c6564180920012808121e0a1666696c655f646f776e6c6f6164735f656e61626c6564180a20012808122a0a22646174615f7461676765645f656c656d656e745f636c69636b735f656e61626c6564180b20012808121a0a12706167655f6c6f6164735f656e61626c6564180c20012808121c0a14706167655f6368616e6765735f656e61626c6564180d2001280812220a1a61727469636c65735f616e645f626c6f67735f656e61626c6564180e2001280812260a1e70726f64756374735f616e645f65636f6d6d657263655f656e61626c6564180f2001280812230a167365617263685f71756572795f706172616d657465721810200128094203e04102121b0a1375726c5f71756572795f706172616d6574657218112001280912180a106578636c756465645f646f6d61696e731812200128093a9301ea418f010a39616e616c797469637361646d696e2e676f6f676c65617069732e636f6d2f456e68616e6365644d6561737572656d656e7453657474696e6773125270726f706572746965732f7b70726f70657274797d2f7765624461746153747265616d732f7b7765625f646174615f73747265616d7d2f656e68616e6365644d6561737572656d656e7453657474696e677322a3020a0c46697265626173654c696e6b12110a046e616d651801200128094203e0410312140a0770726f6a6563741802200128094203e0410512340a0b6372656174655f74696d6518032001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d704203e04103124e0a136d6178696d756d5f757365725f61636365737318042001280e32312e676f6f676c652e616e616c79746963732e61646d696e2e7631616c7068612e4d6178696d756d557365724163636573733a64ea41610a2a616e616c797469637361646d696e2e676f6f676c65617069732e636f6d2f46697265626173654c696e6b123370726f706572746965732f7b70726f70657274797d2f66697265626173654c696e6b732f7b66697265626173655f6c696e6b7d227c0a0d476c6f62616c5369746554616712140a07736e69707065741801200128094203e041053a55ea41520a2b616e616c797469637361646d696e2e676f6f676c65617069732e636f6d2f476c6f62616c53697465546167122370726f706572746965732f7b70726f70657274797d2f676c6f62616c5369746554616722a5030a0d476f6f676c654164734c696e6b12110a046e616d651801200128094203e0410312130a06706172656e741802200128094203e0410512180a0b637573746f6d65725f69641803200128094203e04105121f0a1263616e5f6d616e6167655f636c69656e74731804200128084203e04103123f0a1b6164735f706572736f6e616c697a6174696f6e5f656e61626c656418052001280b321a2e676f6f676c652e70726f746f6275662e426f6f6c56616c7565121a0a0d656d61696c5f616464726573731806200128094203e0410312340a0b6372656174655f74696d6518072001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d704203e0410312340a0b7570646174655f74696d6518082001280b321a2e676f6f676c652e70726f746f6275662e54696d657374616d704203e041033a68ea41650a2b616e616c797469637361646d696e2e676f6f676c65617069732e636f6d2f476f6f676c654164734c696e6b123670726f706572746965732f7b70726f70657274797d2f676f6f676c654164734c696e6b732f7b676f6f676c655f6164735f6c696e6b7d22eb020a134461746153686172696e6753657474696e677312110a046e616d651801200128094203e04103122b0a2373686172696e675f776974685f676f6f676c655f737570706f72745f656e61626c656418022001280812320a2a73686172696e675f776974685f676f6f676c655f61737369676e65645f73616c65735f656e61626c6564180320012808122d0a2573686172696e675f776974685f676f6f676c655f616e795f73616c65735f656e61626c6564180420012808122c0a2473686172696e675f776974685f676f6f676c655f70726f64756374735f656e61626c656418052001280812230a1b73686172696e675f776974685f6f74686572735f656e61626c65641806200128083a5eea415b0a31616e616c797469637361646d696e2e676f6f676c65617069732e636f6d2f4461746153686172696e6753657474696e677312266163636f756e74732f7b6163636f756e747d2f6461746153686172696e6753657474696e67732295020a0e4163636f756e7453756d6d617279120c0a046e616d65180120012809123b0a076163636f756e74180220012809422afa41270a25616e616c797469637361646d696e2e676f6f676c65617069732e636f6d2f4163636f756e7412140a0c646973706c61795f6e616d65180320012809124b0a1270726f70657274795f73756d6d617269657318042003280b322f2e676f6f676c652e616e616c79746963732e61646d696e2e7631616c7068612e50726f706572747953756d6d6172793a55ea41520a2c616e616c797469637361646d696e2e676f6f676c65617069732e636f6d2f4163636f756e7453756d6d61727912226163636f756e7453756d6d61726965732f7b6163636f756e745f73756d6d6172797d22660a0f50726f706572747953756d6d617279123d0a0870726f7065727479180120012809422bfa41280a26616e616c797469637361646d696e2e676f6f676c65617069732e636f6d2f50726f706572747912140a0c646973706c61795f6e616d651802200128092aa7010a114d6178696d756d5573657241636365737312230a1f4d4158494d554d5f555345525f4143434553535f554e5350454349464945441000120d0a094e4f5f414343455353100112140a10524541445f414e445f414e414c595a45100212220a1e454449544f525f574954484f55545f4c494e4b5f4d414e4147454d454e54100312240a20454449544f525f494e434c5544494e475f4c494e4b5f4d414e4147454d454e5410042aaa040a10496e64757374727943617465676f727912210a1d494e4455535452595f43415445474f52595f554e5350454349464945441000120e0a0a4155544f4d4f54495645100112230a1f425553494e4553535f414e445f494e445553545249414c5f4d41524b4554531002120b0a0746494e414e43451003120e0a0a4845414c5448434152451004120e0a0a544543484e4f4c4f47591005120a0a0654524156454c100612090a054f544845521007121a0a16415254535f414e445f454e5445525441494e4d454e54100812160a124245415554595f414e445f4649544e455353100912180a14424f4f4b535f414e445f4c495445524154555245100a12120a0e464f4f445f414e445f4452494e4b100b12090a0547414d4553100c12170a13484f42424945535f414e445f4c454953555245100d12130a0f484f4d455f414e445f47415244454e100e12180a14494e5445524e45545f414e445f54454c45434f4d100f12160a124c41575f414e445f474f5645524e4d454e54101012080a044e455753101112160a124f4e4c494e455f434f4d4d554e4954494553101212160a1250454f504c455f414e445f534f4349455459101312140a10504554535f414e445f414e494d414c531014120f0a0b5245414c5f4553544154451015120d0a095245464552454e43451016120b0a07534349454e43451017120a0a0653504f525453101812160a124a4f42535f414e445f454455434154494f4e1019120c0a0853484f5050494e47101a427b0a22636f6d2e676f6f676c652e616e616c79746963732e61646d696e2e7631616c706861420e5265736f757263657350726f746f50015a43676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f616e616c79746963732f61646d696e2f7631616c7068613b61646d696e620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

