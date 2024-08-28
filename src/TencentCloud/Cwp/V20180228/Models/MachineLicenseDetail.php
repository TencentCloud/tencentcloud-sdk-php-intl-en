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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information on the authorization bound to the machine
 *
 * @method string getQuuid() Obtain Host QUUID
 * @method void setQuuid(string $Quuid) Set Host QUUID
 * @method integer getPayMode() Obtain xx
 * @method void setPayMode(integer $PayMode) Set xx
 * @method string getResourceId() Obtain xxx
 * @method void setResourceId(string $ResourceId) Set xxx
 * @method string getInquireKey() Obtain xxx
 * @method void setInquireKey(string $InquireKey) Set xxx
 * @method integer getSourceType() Obtain xxx
 * @method void setSourceType(integer $SourceType) Set xxx
 */
class MachineLicenseDetail extends AbstractModel
{
    /**
     * @var string Host QUUID
     */
    public $Quuid;

    /**
     * @var integer xx
     */
    public $PayMode;

    /**
     * @var string xxx
     */
    public $ResourceId;

    /**
     * @var string xxx
     */
    public $InquireKey;

    /**
     * @var integer xxx
     */
    public $SourceType;

    /**
     * @param string $Quuid Host QUUID
     * @param integer $PayMode xx
     * @param string $ResourceId xxx
     * @param string $InquireKey xxx
     * @param integer $SourceType xxx
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
        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("InquireKey",$param) and $param["InquireKey"] !== null) {
            $this->InquireKey = $param["InquireKey"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }
    }
}
