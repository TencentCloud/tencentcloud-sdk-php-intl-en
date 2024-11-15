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
namespace TencentCloud\Tmt\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TextTranslate request structure.
 *
 * @method string getSourceText() Obtain The texts to be translated, which must be encoded in UTF-8 and can contain up to 2,000 characters in a request. For non-pure texts such as those with HTML tags, the translation may fail.
 * @method void setSourceText(string $SourceText) Set The texts to be translated, which must be encoded in UTF-8 and can contain up to 2,000 characters in a request. For non-pure texts such as those with HTML tags, the translation may fail.
 * @method string getSource() Obtain Supported source languages:
auto: Automatic language detection
zh: Simplified Chinese
zh_TW: Traditional Chinese
en: English
ja: Japanese
fr: French
es: Spanish
it: Italian
de: German
tr: Turkish
ru: Russian
pt: Portuguese
vi: Vietnamese
id: Bahasa Indonesian
th: Thai
ms: Malay
ar: Arabic
hi: Hindi
 * @method void setSource(string $Source) Set Supported source languages:
auto: Automatic language detection
zh: Simplified Chinese
zh_TW: Traditional Chinese
en: English
ja: Japanese
fr: French
es: Spanish
it: Italian
de: German
tr: Turkish
ru: Russian
pt: Portuguese
vi: Vietnamese
id: Bahasa Indonesian
th: Thai
ms: Malay
ar: Arabic
hi: Hindi
 * @method string getTarget() Obtain Supported target languages for the above source languages:

<li>zh (Simplified Chinese): en (English), ja (Japanese), fr (French), es (Spanish), it (Italian), de (German), tr (Turkish), ru (Russian), pt (Portuguese), vi (Vietnamese), id (Bahasa Indonesian), th (Thai), and ms (Malay)</li>
<li>zh-TW (Traditional Chinese): en (English), ja (Japanese), fr (French), es (Spanish), it (Italian), tr (Turkish), ru (Russian), pt (Portuguese), vi (Vietnamese), id (Bahasa Indonesian), th (Thai), and ms (Malay)</li>
<li>en (English): zh (Simplified Chinese), zh-TW (Traditional Chinese), ja (Japanese), fr (French), es (Spanish), it (Italian), de (German), tr (Turkish), vi (Vietnamese), id (Bahasa Indonesian), th (Thai), ms (Malay), and hi (Hindi)</li>
<li>fr (French): zh (Simplified Chinese), zh-TW (Traditional Chinese) and en (English)</li>
<li>it (Italian): zh (Simplified Chinese), zh-TW (Traditional Chinese) and en (English)</li>
<li>de (German): zh (Simplified Chinese), zh-TW (Traditional Chinese) and en (English)</li>
<li>ru (Russian): zh (Simplified Chinese) and zh-TW (Traditional Chinese)</li>
<li>tr (Turkish): zh (Simplified Chinese) and zh-TW (Traditional Chinese)</li>
<li>pt (Portuguese): zh (Simplified Chinese) and tr (Turkish)</li>
<li>es (Spanish): zh (Simplified Chinese), zh-TW (Traditional Chinese) and en (English)</li>
<li>ja (Japanese): zh (Simplified Chinese), zh-TW (Traditional Chinese) and en (English)</li>
<li>vi (Vietnamese): zh (Simplified Chinese), zh-TW (Traditional Chinese) and en (English)</li>
<li>th (Thai): zh (Simplified Chinese) and en (English)</li>
<li>id (Bahasa Indonesian): zh (Simplified Chinese), zh-TW (Traditional Chinese) and en (English)</li>
<li>ms (Malay): zh (Simplified Chinese) and zh-TW (Traditional Chinese)</li>
<li>ar (Arabic): en (English)</li>
<li>hi (Hindi): en (English)</li>
 * @method void setTarget(string $Target) Set Supported target languages for the above source languages:

<li>zh (Simplified Chinese): en (English), ja (Japanese), fr (French), es (Spanish), it (Italian), de (German), tr (Turkish), ru (Russian), pt (Portuguese), vi (Vietnamese), id (Bahasa Indonesian), th (Thai), and ms (Malay)</li>
<li>zh-TW (Traditional Chinese): en (English), ja (Japanese), fr (French), es (Spanish), it (Italian), tr (Turkish), ru (Russian), pt (Portuguese), vi (Vietnamese), id (Bahasa Indonesian), th (Thai), and ms (Malay)</li>
<li>en (English): zh (Simplified Chinese), zh-TW (Traditional Chinese), ja (Japanese), fr (French), es (Spanish), it (Italian), de (German), tr (Turkish), vi (Vietnamese), id (Bahasa Indonesian), th (Thai), ms (Malay), and hi (Hindi)</li>
<li>fr (French): zh (Simplified Chinese), zh-TW (Traditional Chinese) and en (English)</li>
<li>it (Italian): zh (Simplified Chinese), zh-TW (Traditional Chinese) and en (English)</li>
<li>de (German): zh (Simplified Chinese), zh-TW (Traditional Chinese) and en (English)</li>
<li>ru (Russian): zh (Simplified Chinese) and zh-TW (Traditional Chinese)</li>
<li>tr (Turkish): zh (Simplified Chinese) and zh-TW (Traditional Chinese)</li>
<li>pt (Portuguese): zh (Simplified Chinese) and tr (Turkish)</li>
<li>es (Spanish): zh (Simplified Chinese), zh-TW (Traditional Chinese) and en (English)</li>
<li>ja (Japanese): zh (Simplified Chinese), zh-TW (Traditional Chinese) and en (English)</li>
<li>vi (Vietnamese): zh (Simplified Chinese), zh-TW (Traditional Chinese) and en (English)</li>
<li>th (Thai): zh (Simplified Chinese) and en (English)</li>
<li>id (Bahasa Indonesian): zh (Simplified Chinese), zh-TW (Traditional Chinese) and en (English)</li>
<li>ms (Malay): zh (Simplified Chinese) and zh-TW (Traditional Chinese)</li>
<li>ar (Arabic): en (English)</li>
<li>hi (Hindi): en (English)</li>
 * @method integer getProjectId() Obtain The project ID, which can be obtained from **Console -> Account Center -> Project Management**. If no one is set, enter the default project ID `0`.
 * @method void setProjectId(integer $ProjectId) Set The project ID, which can be obtained from **Console -> Account Center -> Project Management**. If no one is set, enter the default project ID `0`.
 * @method string getUntranslatedText() Obtain The parameter used to mark the text content that needs to remain untranslated, such as special symbols and names of people and places. You can set only one word for this parameter in each request. Only nouns (like names of people and places) are supported, and verbs or phrases may cause poor translation outcomes.
 * @method void setUntranslatedText(string $UntranslatedText) Set The parameter used to mark the text content that needs to remain untranslated, such as special symbols and names of people and places. You can set only one word for this parameter in each request. Only nouns (like names of people and places) are supported, and verbs or phrases may cause poor translation outcomes.
 * @method array getTermRepoIDList() Obtain 
 * @method void setTermRepoIDList(array $TermRepoIDList) Set 
 * @method array getSentRepoIDList() Obtain 
 * @method void setSentRepoIDList(array $SentRepoIDList) Set 
 */
class TextTranslateRequest extends AbstractModel
{
    /**
     * @var string The texts to be translated, which must be encoded in UTF-8 and can contain up to 2,000 characters in a request. For non-pure texts such as those with HTML tags, the translation may fail.
     */
    public $SourceText;

    /**
     * @var string Supported source languages:
auto: Automatic language detection
zh: Simplified Chinese
zh_TW: Traditional Chinese
en: English
ja: Japanese
fr: French
es: Spanish
it: Italian
de: German
tr: Turkish
ru: Russian
pt: Portuguese
vi: Vietnamese
id: Bahasa Indonesian
th: Thai
ms: Malay
ar: Arabic
hi: Hindi
     */
    public $Source;

    /**
     * @var string Supported target languages for the above source languages:

<li>zh (Simplified Chinese): en (English), ja (Japanese), fr (French), es (Spanish), it (Italian), de (German), tr (Turkish), ru (Russian), pt (Portuguese), vi (Vietnamese), id (Bahasa Indonesian), th (Thai), and ms (Malay)</li>
<li>zh-TW (Traditional Chinese): en (English), ja (Japanese), fr (French), es (Spanish), it (Italian), tr (Turkish), ru (Russian), pt (Portuguese), vi (Vietnamese), id (Bahasa Indonesian), th (Thai), and ms (Malay)</li>
<li>en (English): zh (Simplified Chinese), zh-TW (Traditional Chinese), ja (Japanese), fr (French), es (Spanish), it (Italian), de (German), tr (Turkish), vi (Vietnamese), id (Bahasa Indonesian), th (Thai), ms (Malay), and hi (Hindi)</li>
<li>fr (French): zh (Simplified Chinese), zh-TW (Traditional Chinese) and en (English)</li>
<li>it (Italian): zh (Simplified Chinese), zh-TW (Traditional Chinese) and en (English)</li>
<li>de (German): zh (Simplified Chinese), zh-TW (Traditional Chinese) and en (English)</li>
<li>ru (Russian): zh (Simplified Chinese) and zh-TW (Traditional Chinese)</li>
<li>tr (Turkish): zh (Simplified Chinese) and zh-TW (Traditional Chinese)</li>
<li>pt (Portuguese): zh (Simplified Chinese) and tr (Turkish)</li>
<li>es (Spanish): zh (Simplified Chinese), zh-TW (Traditional Chinese) and en (English)</li>
<li>ja (Japanese): zh (Simplified Chinese), zh-TW (Traditional Chinese) and en (English)</li>
<li>vi (Vietnamese): zh (Simplified Chinese), zh-TW (Traditional Chinese) and en (English)</li>
<li>th (Thai): zh (Simplified Chinese) and en (English)</li>
<li>id (Bahasa Indonesian): zh (Simplified Chinese), zh-TW (Traditional Chinese) and en (English)</li>
<li>ms (Malay): zh (Simplified Chinese) and zh-TW (Traditional Chinese)</li>
<li>ar (Arabic): en (English)</li>
<li>hi (Hindi): en (English)</li>
     */
    public $Target;

    /**
     * @var integer The project ID, which can be obtained from **Console -> Account Center -> Project Management**. If no one is set, enter the default project ID `0`.
     */
    public $ProjectId;

    /**
     * @var string The parameter used to mark the text content that needs to remain untranslated, such as special symbols and names of people and places. You can set only one word for this parameter in each request. Only nouns (like names of people and places) are supported, and verbs or phrases may cause poor translation outcomes.
     */
    public $UntranslatedText;

    /**
     * @var array 
     */
    public $TermRepoIDList;

    /**
     * @var array 
     */
    public $SentRepoIDList;

    /**
     * @param string $SourceText The texts to be translated, which must be encoded in UTF-8 and can contain up to 2,000 characters in a request. For non-pure texts such as those with HTML tags, the translation may fail.
     * @param string $Source Supported source languages:
auto: Automatic language detection
zh: Simplified Chinese
zh_TW: Traditional Chinese
en: English
ja: Japanese
fr: French
es: Spanish
it: Italian
de: German
tr: Turkish
ru: Russian
pt: Portuguese
vi: Vietnamese
id: Bahasa Indonesian
th: Thai
ms: Malay
ar: Arabic
hi: Hindi
     * @param string $Target Supported target languages for the above source languages:

<li>zh (Simplified Chinese): en (English), ja (Japanese), fr (French), es (Spanish), it (Italian), de (German), tr (Turkish), ru (Russian), pt (Portuguese), vi (Vietnamese), id (Bahasa Indonesian), th (Thai), and ms (Malay)</li>
<li>zh-TW (Traditional Chinese): en (English), ja (Japanese), fr (French), es (Spanish), it (Italian), tr (Turkish), ru (Russian), pt (Portuguese), vi (Vietnamese), id (Bahasa Indonesian), th (Thai), and ms (Malay)</li>
<li>en (English): zh (Simplified Chinese), zh-TW (Traditional Chinese), ja (Japanese), fr (French), es (Spanish), it (Italian), de (German), tr (Turkish), vi (Vietnamese), id (Bahasa Indonesian), th (Thai), ms (Malay), and hi (Hindi)</li>
<li>fr (French): zh (Simplified Chinese), zh-TW (Traditional Chinese) and en (English)</li>
<li>it (Italian): zh (Simplified Chinese), zh-TW (Traditional Chinese) and en (English)</li>
<li>de (German): zh (Simplified Chinese), zh-TW (Traditional Chinese) and en (English)</li>
<li>ru (Russian): zh (Simplified Chinese) and zh-TW (Traditional Chinese)</li>
<li>tr (Turkish): zh (Simplified Chinese) and zh-TW (Traditional Chinese)</li>
<li>pt (Portuguese): zh (Simplified Chinese) and tr (Turkish)</li>
<li>es (Spanish): zh (Simplified Chinese), zh-TW (Traditional Chinese) and en (English)</li>
<li>ja (Japanese): zh (Simplified Chinese), zh-TW (Traditional Chinese) and en (English)</li>
<li>vi (Vietnamese): zh (Simplified Chinese), zh-TW (Traditional Chinese) and en (English)</li>
<li>th (Thai): zh (Simplified Chinese) and en (English)</li>
<li>id (Bahasa Indonesian): zh (Simplified Chinese), zh-TW (Traditional Chinese) and en (English)</li>
<li>ms (Malay): zh (Simplified Chinese) and zh-TW (Traditional Chinese)</li>
<li>ar (Arabic): en (English)</li>
<li>hi (Hindi): en (English)</li>
     * @param integer $ProjectId The project ID, which can be obtained from **Console -> Account Center -> Project Management**. If no one is set, enter the default project ID `0`.
     * @param string $UntranslatedText The parameter used to mark the text content that needs to remain untranslated, such as special symbols and names of people and places. You can set only one word for this parameter in each request. Only nouns (like names of people and places) are supported, and verbs or phrases may cause poor translation outcomes.
     * @param array $TermRepoIDList 
     * @param array $SentRepoIDList 
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
        if (array_key_exists("SourceText",$param) and $param["SourceText"] !== null) {
            $this->SourceText = $param["SourceText"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("UntranslatedText",$param) and $param["UntranslatedText"] !== null) {
            $this->UntranslatedText = $param["UntranslatedText"];
        }

        if (array_key_exists("TermRepoIDList",$param) and $param["TermRepoIDList"] !== null) {
            $this->TermRepoIDList = $param["TermRepoIDList"];
        }

        if (array_key_exists("SentRepoIDList",$param) and $param["SentRepoIDList"] !== null) {
            $this->SentRepoIDList = $param["SentRepoIDList"];
        }
    }
}
