<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Configuration used by speech recognition
 *
 * @method string getLanguage() Obtain The supported languages for speech recognition are as follows, with the default being "zh" for Chinese. The values for the `Language` field follow the [ISO639](https://en.wikipedia.org/wiki/List_of_ISO_639_language_codes) standard. Here is the full list of supported languages:

1. Chinese = "zh"
2. Chinese_TW = "zh-TW"
3. Chinese_DIALECT = "zh-dialect"
4. English = "en"
5. Vietnamese = "vi"
6. Japanese = "ja"
7. Korean = "ko"
8. Indonesian = "id"
9. Thai = "th"
10. Portuguese = "pt"
11. Turkish = "tr"
12. Arabic = "ar"
13. Spanish = "es"
14. Hindi = "hi"
15. French = "fr"
16. Malay = "ms"
17. Filipino = "fil"
18. German = "de"
19. Italian = "it"
20. Russian = "ru"

**Note:** If the language you need is not listed, please contact our technical support team.
 * @method void setLanguage(string $Language) Set The supported languages for speech recognition are as follows, with the default being "zh" for Chinese. The values for the `Language` field follow the [ISO639](https://en.wikipedia.org/wiki/List_of_ISO_639_language_codes) standard. Here is the full list of supported languages:

1. Chinese = "zh"
2. Chinese_TW = "zh-TW"
3. Chinese_DIALECT = "zh-dialect"
4. English = "en"
5. Vietnamese = "vi"
6. Japanese = "ja"
7. Korean = "ko"
8. Indonesian = "id"
9. Thai = "th"
10. Portuguese = "pt"
11. Turkish = "tr"
12. Arabic = "ar"
13. Spanish = "es"
14. Hindi = "hi"
15. French = "fr"
16. Malay = "ms"
17. Filipino = "fil"
18. German = "de"
19. Italian = "it"
20. Russian = "ru"

**Note:** If the language you need is not listed, please contact our technical support team.
 * @method array getAlternativeLanguage() Obtain Initiate fuzzy recognition to replace additional language types. Fill in up to 3 language types. Note: When Language is specified as "zh-dialect", fuzzy recognition is not supported and this field is invalid.
 * @method void setAlternativeLanguage(array $AlternativeLanguage) Set Initiate fuzzy recognition to replace additional language types. Fill in up to 3 language types. Note: When Language is specified as "zh-dialect", fuzzy recognition is not supported and this field is invalid.
 */
class RecognizeConfig extends AbstractModel
{
    /**
     * @var string The supported languages for speech recognition are as follows, with the default being "zh" for Chinese. The values for the `Language` field follow the [ISO639](https://en.wikipedia.org/wiki/List_of_ISO_639_language_codes) standard. Here is the full list of supported languages:

1. Chinese = "zh"
2. Chinese_TW = "zh-TW"
3. Chinese_DIALECT = "zh-dialect"
4. English = "en"
5. Vietnamese = "vi"
6. Japanese = "ja"
7. Korean = "ko"
8. Indonesian = "id"
9. Thai = "th"
10. Portuguese = "pt"
11. Turkish = "tr"
12. Arabic = "ar"
13. Spanish = "es"
14. Hindi = "hi"
15. French = "fr"
16. Malay = "ms"
17. Filipino = "fil"
18. German = "de"
19. Italian = "it"
20. Russian = "ru"

**Note:** If the language you need is not listed, please contact our technical support team.
     */
    public $Language;

    /**
     * @var array Initiate fuzzy recognition to replace additional language types. Fill in up to 3 language types. Note: When Language is specified as "zh-dialect", fuzzy recognition is not supported and this field is invalid.
     */
    public $AlternativeLanguage;

    /**
     * @param string $Language The supported languages for speech recognition are as follows, with the default being "zh" for Chinese. The values for the `Language` field follow the [ISO639](https://en.wikipedia.org/wiki/List_of_ISO_639_language_codes) standard. Here is the full list of supported languages:

1. Chinese = "zh"
2. Chinese_TW = "zh-TW"
3. Chinese_DIALECT = "zh-dialect"
4. English = "en"
5. Vietnamese = "vi"
6. Japanese = "ja"
7. Korean = "ko"
8. Indonesian = "id"
9. Thai = "th"
10. Portuguese = "pt"
11. Turkish = "tr"
12. Arabic = "ar"
13. Spanish = "es"
14. Hindi = "hi"
15. French = "fr"
16. Malay = "ms"
17. Filipino = "fil"
18. German = "de"
19. Italian = "it"
20. Russian = "ru"

**Note:** If the language you need is not listed, please contact our technical support team.
     * @param array $AlternativeLanguage Initiate fuzzy recognition to replace additional language types. Fill in up to 3 language types. Note: When Language is specified as "zh-dialect", fuzzy recognition is not supported and this field is invalid.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }

        if (array_key_exists("AlternativeLanguage",$param) and $param["AlternativeLanguage"] !== null) {
            $this->AlternativeLanguage = $param["AlternativeLanguage"];
        }
    }
}
