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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Smart subtitle task result.
 *
 * @method string getType() Obtain Task type. Valid values:
<Li>AsrFullTextRecognition: full speech recognition</li>
<Li>TransTextRecognition: speech translation</li>
 * @method void setType(string $Type) Set Task type. Valid values:
<Li>AsrFullTextRecognition: full speech recognition</li>
<Li>TransTextRecognition: speech translation</li>
 * @method SmartSubtitleTaskAsrFullTextResult getAsrFullTextTask() Obtain Full speech recognition result. When Type is
 set to AsrFullTextRecognition, this parameter takes effect.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setAsrFullTextTask(SmartSubtitleTaskAsrFullTextResult $AsrFullTextTask) Set Full speech recognition result. When Type is
 set to AsrFullTextRecognition, this parameter takes effect.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method SmartSubtitleTaskTransTextResult getTransTextTask() Obtain Translation result. When Type is

 set to TransTextRecognition, this parameter takes effect.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTransTextTask(SmartSubtitleTaskTransTextResult $TransTextTask) Set Translation result. When Type is

 set to TransTextRecognition, this parameter takes effect.
Note: This field may return null, indicating that no valid value can be obtained.
 */
class SmartSubtitlesResult extends AbstractModel
{
    /**
     * @var string Task type. Valid values:
<Li>AsrFullTextRecognition: full speech recognition</li>
<Li>TransTextRecognition: speech translation</li>
     */
    public $Type;

    /**
     * @var SmartSubtitleTaskAsrFullTextResult Full speech recognition result. When Type is
 set to AsrFullTextRecognition, this parameter takes effect.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $AsrFullTextTask;

    /**
     * @var SmartSubtitleTaskTransTextResult Translation result. When Type is

 set to TransTextRecognition, this parameter takes effect.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TransTextTask;

    /**
     * @param string $Type Task type. Valid values:
<Li>AsrFullTextRecognition: full speech recognition</li>
<Li>TransTextRecognition: speech translation</li>
     * @param SmartSubtitleTaskAsrFullTextResult $AsrFullTextTask Full speech recognition result. When Type is
 set to AsrFullTextRecognition, this parameter takes effect.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param SmartSubtitleTaskTransTextResult $TransTextTask Translation result. When Type is

 set to TransTextRecognition, this parameter takes effect.
Note: This field may return null, indicating that no valid value can be obtained.
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AsrFullTextTask",$param) and $param["AsrFullTextTask"] !== null) {
            $this->AsrFullTextTask = new SmartSubtitleTaskAsrFullTextResult();
            $this->AsrFullTextTask->deserialize($param["AsrFullTextTask"]);
        }

        if (array_key_exists("TransTextTask",$param) and $param["TransTextTask"] !== null) {
            $this->TransTextTask = new SmartSubtitleTaskTransTextResult();
            $this->TransTextTask->deserialize($param["TransTextTask"]);
        }
    }
}
