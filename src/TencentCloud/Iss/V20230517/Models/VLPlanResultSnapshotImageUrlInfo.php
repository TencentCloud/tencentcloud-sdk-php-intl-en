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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Visual understanding plan source material URL information
 *
 * @method string getVLPlanResultId() Obtain <p>Analysis result ID</p>
 * @method void setVLPlanResultId(string $VLPlanResultId) Set <p>Analysis result ID</p>
 * @method string getSourceFileURL() Obtain <p>Source material download URL (empty if unsuccessful)</p>
 * @method void setSourceFileURL(string $SourceFileURL) Set <p>Source material download URL (empty if unsuccessful)</p>
 * @method integer getExpire() Obtain <p>URL validity period (seconds; 0 on failure)</p>
 * @method void setExpire(integer $Expire) Set <p>URL validity period (seconds; 0 on failure)</p>
 * @method string getErrMsg() Obtain <p>Error information (has a value on failure)</p>
 * @method void setErrMsg(string $ErrMsg) Set <p>Error information (has a value on failure)</p>
 */
class VLPlanResultSnapshotImageUrlInfo extends AbstractModel
{
    /**
     * @var string <p>Analysis result ID</p>
     */
    public $VLPlanResultId;

    /**
     * @var string <p>Source material download URL (empty if unsuccessful)</p>
     */
    public $SourceFileURL;

    /**
     * @var integer <p>URL validity period (seconds; 0 on failure)</p>
     */
    public $Expire;

    /**
     * @var string <p>Error information (has a value on failure)</p>
     */
    public $ErrMsg;

    /**
     * @param string $VLPlanResultId <p>Analysis result ID</p>
     * @param string $SourceFileURL <p>Source material download URL (empty if unsuccessful)</p>
     * @param integer $Expire <p>URL validity period (seconds; 0 on failure)</p>
     * @param string $ErrMsg <p>Error information (has a value on failure)</p>
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
        if (array_key_exists("VLPlanResultId",$param) and $param["VLPlanResultId"] !== null) {
            $this->VLPlanResultId = $param["VLPlanResultId"];
        }

        if (array_key_exists("SourceFileURL",$param) and $param["SourceFileURL"] !== null) {
            $this->SourceFileURL = $param["SourceFileURL"];
        }

        if (array_key_exists("Expire",$param) and $param["Expire"] !== null) {
            $this->Expire = $param["Expire"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }
    }
}
