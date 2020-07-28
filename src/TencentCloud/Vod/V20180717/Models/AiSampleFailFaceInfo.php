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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI-based sample management - face information failed to be processed.
 *
 * @method integer getIndex() Obtain It corresponds to incorrect image subscripts in the `FaceContents` input parameter, starting from 0.
 * @method void setIndex(integer $Index) Set It corresponds to incorrect image subscripts in the `FaceContents` input parameter, starting from 0.
 * @method integer getErrCode() Obtain Error code. Valid values:
<li>0: success;</li>
<li>Other values: failure.</li>
 * @method void setErrCode(integer $ErrCode) Set Error code. Valid values:
<li>0: success;</li>
<li>Other values: failure.</li>
 * @method string getMessage() Obtain Error message.
 * @method void setMessage(string $Message) Set Error message.
 */
class AiSampleFailFaceInfo extends AbstractModel
{
    /**
     * @var integer It corresponds to incorrect image subscripts in the `FaceContents` input parameter, starting from 0.
     */
    public $Index;

    /**
     * @var integer Error code. Valid values:
<li>0: success;</li>
<li>Other values: failure.</li>
     */
    public $ErrCode;

    /**
     * @var string Error message.
     */
    public $Message;

    /**
     * @param integer $Index It corresponds to incorrect image subscripts in the `FaceContents` input parameter, starting from 0.
     * @param integer $ErrCode Error code. Valid values:
<li>0: success;</li>
<li>Other values: failure.</li>
     * @param string $Message Error message.
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
        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
