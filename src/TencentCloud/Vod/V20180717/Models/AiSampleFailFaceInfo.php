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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI sample management, face information that failed processing
 *
 * @method integer getIndex() Obtain Incorrect image subscript in the input parameter FaceContents, starting from 0.
 * @method void setIndex(integer $Index) Set Incorrect image subscript in the input parameter FaceContents, starting from 0.
 * @method integer getErrCode() Obtain Error code. Value:
<li>0: success;</li>
<li>Other: Failed.</li>
 * @method void setErrCode(integer $ErrCode) Set Error code. Value:
<li>0: success;</li>
<li>Other: Failed.</li>
 * @method string getMessage() Obtain Error description.
 * @method void setMessage(string $Message) Set Error description.
 */
class AiSampleFailFaceInfo extends AbstractModel
{
    /**
     * @var integer Incorrect image subscript in the input parameter FaceContents, starting from 0.
     */
    public $Index;

    /**
     * @var integer Error code. Value:
<li>0: success;</li>
<li>Other: Failed.</li>
     */
    public $ErrCode;

    /**
     * @var string Error description.
     */
    public $Message;

    /**
     * @param integer $Index Incorrect image subscript in the input parameter FaceContents, starting from 0.
     * @param integer $ErrCode Error code. Value:
<li>0: success;</li>
<li>Other: Failed.</li>
     * @param string $Message Error description.
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
