<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ChatTranslations request structure.
 *
 * @method string getModel() Obtain Model name. optional values include hunyuan-translation.
Please read the introduction in [the product overview](https://www.tencentcloud.com/document/product/1284/75277) for model descriptions.

Note:
Different models have different pricing. according to [the purchase guide](https://www.tencentcloud.com/document/product/1284/77186), call as needed.
 * @method void setModel(string $Model) Set Model name. optional values include hunyuan-translation.
Please read the introduction in [the product overview](https://www.tencentcloud.com/document/product/1284/75277) for model descriptions.

Note:
Different models have different pricing. according to [the purchase guide](https://www.tencentcloud.com/document/product/1284/77186), call as needed.
 * @method boolean getStream() Obtain Streaming call switch.
Note:.
1. it defaults to non-streaming (false) when no value is passed.
2. for streaming calls, the results are incrementally returned via the SSE protocol (the return value is taken from Choices[n].Delta, and incremental data must be concatenated to obtain the complete result).
3. for non-streaming calls:.
The calling method is the same as an ordinary HTTP request.
The API response is time-consuming. if needed, set it to true for reduced latency.
Only return the final result once (return value takes the value from Choices[n].Message).

Note:.
When making an SDK call, streaming and non-streaming calls require **different ways** to obtain the return value. refer to the comments or sample code in the SDK (in the examples/hunyuan/v20230901/ directory of each language SDK code repository).
 * @method void setStream(boolean $Stream) Set Streaming call switch.
Note:.
1. it defaults to non-streaming (false) when no value is passed.
2. for streaming calls, the results are incrementally returned via the SSE protocol (the return value is taken from Choices[n].Delta, and incremental data must be concatenated to obtain the complete result).
3. for non-streaming calls:.
The calling method is the same as an ordinary HTTP request.
The API response is time-consuming. if needed, set it to true for reduced latency.
Only return the final result once (return value takes the value from Choices[n].Message).

Note:.
When making an SDK call, streaming and non-streaming calls require **different ways** to obtain the return value. refer to the comments or sample code in the SDK (in the examples/hunyuan/v20230901/ directory of each language SDK code repository).
 * @method string getText() Obtain Text to be translated.
 * @method void setText(string $Text) Set Text to be translated.
 * @method string getSource() Obtain Source language.
Supported language list:. 
Simplified chinese: zh, traditional chinese: zh-TR, cantonese: yue, english: en, french: fr, portuguese: pt, spanish: es, japanese: ja, turkish: TR, russian: ru, arabic: ar, korean: ko, thai: th, italian: it, german: de, vietnamese: vi, malay: ms, indonesian: id.
The following languages are supported only by the hunyuan-translation model:.
Filipino: fil, hindi: hi, polish: pl, czech: cs, dutch: nl, khmer: km, burmese: my, persian: fa, gujarati: gu, urdu: ur, telugu: te, marathi: mr, hebrew: he, bengali: bn, tamil: ta, ukrainian: uk, tibetan: bo, kazakh: kk, mongolian: mn, uyghur: ug.
 * @method void setSource(string $Source) Set Source language.
Supported language list:. 
Simplified chinese: zh, traditional chinese: zh-TR, cantonese: yue, english: en, french: fr, portuguese: pt, spanish: es, japanese: ja, turkish: TR, russian: ru, arabic: ar, korean: ko, thai: th, italian: it, german: de, vietnamese: vi, malay: ms, indonesian: id.
The following languages are supported only by the hunyuan-translation model:.
Filipino: fil, hindi: hi, polish: pl, czech: cs, dutch: nl, khmer: km, burmese: my, persian: fa, gujarati: gu, urdu: ur, telugu: te, marathi: mr, hebrew: he, bengali: bn, tamil: ta, ukrainian: uk, tibetan: bo, kazakh: kk, mongolian: mn, uyghur: ug.
 * @method string getTarget() Obtain Target language.
Supported language list:. 
Simplified chinese: zh, traditional chinese: zh-TR, cantonese: yue, english: en, french: fr, portuguese: pt, spanish: es, japanese: ja, turkish: TR, russian: ru, arabic: ar, korean: ko, thai: th, italian: it, german: de, vietnamese: vi, malay: ms, indonesian: id.
The following languages are supported only by the hunyuan-translation model:.
Filipino: fil, hindi: hi, polish: pl, czech: cs, dutch: nl, khmer: km, burmese: my, persian: fa, gujarati: gu, urdu: ur, telugu: te, marathi: mr, hebrew: he, bengali: bn, tamil: ta, ukrainian: uk, tibetan: bo, kazakh: kk, mongolian: mn, uyghur: ug.
 * @method void setTarget(string $Target) Set Target language.
Supported language list:. 
Simplified chinese: zh, traditional chinese: zh-TR, cantonese: yue, english: en, french: fr, portuguese: pt, spanish: es, japanese: ja, turkish: TR, russian: ru, arabic: ar, korean: ko, thai: th, italian: it, german: de, vietnamese: vi, malay: ms, indonesian: id.
The following languages are supported only by the hunyuan-translation model:.
Filipino: fil, hindi: hi, polish: pl, czech: cs, dutch: nl, khmer: km, burmese: my, persian: fa, gujarati: gu, urdu: ur, telugu: te, marathi: mr, hebrew: he, bengali: bn, tamil: ta, ukrainian: uk, tibetan: bo, kazakh: kk, mongolian: mn, uyghur: ug.
 * @method string getField() Obtain Domain of the text to be translated, such as game plot.
 * @method void setField(string $Field) Set Domain of the text to be translated, such as game plot.
 * @method array getReferences() Obtain Reference example, up to 10.
 * @method void setReferences(array $References) Set Reference example, up to 10.
 */
class ChatTranslationsRequest extends AbstractModel
{
    /**
     * @var string Model name. optional values include hunyuan-translation.
Please read the introduction in [the product overview](https://www.tencentcloud.com/document/product/1284/75277) for model descriptions.

Note:
Different models have different pricing. according to [the purchase guide](https://www.tencentcloud.com/document/product/1284/77186), call as needed.
     */
    public $Model;

    /**
     * @var boolean Streaming call switch.
Note:.
1. it defaults to non-streaming (false) when no value is passed.
2. for streaming calls, the results are incrementally returned via the SSE protocol (the return value is taken from Choices[n].Delta, and incremental data must be concatenated to obtain the complete result).
3. for non-streaming calls:.
The calling method is the same as an ordinary HTTP request.
The API response is time-consuming. if needed, set it to true for reduced latency.
Only return the final result once (return value takes the value from Choices[n].Message).

Note:.
When making an SDK call, streaming and non-streaming calls require **different ways** to obtain the return value. refer to the comments or sample code in the SDK (in the examples/hunyuan/v20230901/ directory of each language SDK code repository).
     */
    public $Stream;

    /**
     * @var string Text to be translated.
     */
    public $Text;

    /**
     * @var string Source language.
Supported language list:. 
Simplified chinese: zh, traditional chinese: zh-TR, cantonese: yue, english: en, french: fr, portuguese: pt, spanish: es, japanese: ja, turkish: TR, russian: ru, arabic: ar, korean: ko, thai: th, italian: it, german: de, vietnamese: vi, malay: ms, indonesian: id.
The following languages are supported only by the hunyuan-translation model:.
Filipino: fil, hindi: hi, polish: pl, czech: cs, dutch: nl, khmer: km, burmese: my, persian: fa, gujarati: gu, urdu: ur, telugu: te, marathi: mr, hebrew: he, bengali: bn, tamil: ta, ukrainian: uk, tibetan: bo, kazakh: kk, mongolian: mn, uyghur: ug.
     */
    public $Source;

    /**
     * @var string Target language.
Supported language list:. 
Simplified chinese: zh, traditional chinese: zh-TR, cantonese: yue, english: en, french: fr, portuguese: pt, spanish: es, japanese: ja, turkish: TR, russian: ru, arabic: ar, korean: ko, thai: th, italian: it, german: de, vietnamese: vi, malay: ms, indonesian: id.
The following languages are supported only by the hunyuan-translation model:.
Filipino: fil, hindi: hi, polish: pl, czech: cs, dutch: nl, khmer: km, burmese: my, persian: fa, gujarati: gu, urdu: ur, telugu: te, marathi: mr, hebrew: he, bengali: bn, tamil: ta, ukrainian: uk, tibetan: bo, kazakh: kk, mongolian: mn, uyghur: ug.
     */
    public $Target;

    /**
     * @var string Domain of the text to be translated, such as game plot.
     */
    public $Field;

    /**
     * @var array Reference example, up to 10.
     */
    public $References;

    /**
     * @param string $Model Model name. optional values include hunyuan-translation.
Please read the introduction in [the product overview](https://www.tencentcloud.com/document/product/1284/75277) for model descriptions.

Note:
Different models have different pricing. according to [the purchase guide](https://www.tencentcloud.com/document/product/1284/77186), call as needed.
     * @param boolean $Stream Streaming call switch.
Note:.
1. it defaults to non-streaming (false) when no value is passed.
2. for streaming calls, the results are incrementally returned via the SSE protocol (the return value is taken from Choices[n].Delta, and incremental data must be concatenated to obtain the complete result).
3. for non-streaming calls:.
The calling method is the same as an ordinary HTTP request.
The API response is time-consuming. if needed, set it to true for reduced latency.
Only return the final result once (return value takes the value from Choices[n].Message).

Note:.
When making an SDK call, streaming and non-streaming calls require **different ways** to obtain the return value. refer to the comments or sample code in the SDK (in the examples/hunyuan/v20230901/ directory of each language SDK code repository).
     * @param string $Text Text to be translated.
     * @param string $Source Source language.
Supported language list:. 
Simplified chinese: zh, traditional chinese: zh-TR, cantonese: yue, english: en, french: fr, portuguese: pt, spanish: es, japanese: ja, turkish: TR, russian: ru, arabic: ar, korean: ko, thai: th, italian: it, german: de, vietnamese: vi, malay: ms, indonesian: id.
The following languages are supported only by the hunyuan-translation model:.
Filipino: fil, hindi: hi, polish: pl, czech: cs, dutch: nl, khmer: km, burmese: my, persian: fa, gujarati: gu, urdu: ur, telugu: te, marathi: mr, hebrew: he, bengali: bn, tamil: ta, ukrainian: uk, tibetan: bo, kazakh: kk, mongolian: mn, uyghur: ug.
     * @param string $Target Target language.
Supported language list:. 
Simplified chinese: zh, traditional chinese: zh-TR, cantonese: yue, english: en, french: fr, portuguese: pt, spanish: es, japanese: ja, turkish: TR, russian: ru, arabic: ar, korean: ko, thai: th, italian: it, german: de, vietnamese: vi, malay: ms, indonesian: id.
The following languages are supported only by the hunyuan-translation model:.
Filipino: fil, hindi: hi, polish: pl, czech: cs, dutch: nl, khmer: km, burmese: my, persian: fa, gujarati: gu, urdu: ur, telugu: te, marathi: mr, hebrew: he, bengali: bn, tamil: ta, ukrainian: uk, tibetan: bo, kazakh: kk, mongolian: mn, uyghur: ug.
     * @param string $Field Domain of the text to be translated, such as game plot.
     * @param array $References Reference example, up to 10.
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
        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Stream",$param) and $param["Stream"] !== null) {
            $this->Stream = $param["Stream"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("Field",$param) and $param["Field"] !== null) {
            $this->Field = $param["Field"];
        }

        if (array_key_exists("References",$param) and $param["References"] !== null) {
            $this->References = [];
            foreach ($param["References"] as $key => $value){
                $obj = new Reference();
                $obj->deserialize($value);
                array_push($this->References, $obj);
            }
        }
    }
}
