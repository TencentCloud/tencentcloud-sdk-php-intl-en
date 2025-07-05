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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Order Modification Parameter Object
 *
 * @method string getResourceId() Obtain Resource ID
 * @method void setResourceId(string $ResourceId) Set Resource ID
 * @method string getNewSubProductCode() Obtain New Product Identification. PRO_VERSION: Professional Edition; FLAGSHIP: Premium Edition
 * @method void setNewSubProductCode(string $NewSubProductCode) Set New Product Identification. PRO_VERSION: Professional Edition; FLAGSHIP: Premium Edition
 * @method integer getInquireNum() Obtain Scale-up/Scale-down Count, which is ignored for reconfiguration sub-product
 * @method void setInquireNum(integer $InquireNum) Set Scale-up/Scale-down Count, which is ignored for reconfiguration sub-product
 */
class OrderModifyObject extends AbstractModel
{
    /**
     * @var string Resource ID
     */
    public $ResourceId;

    /**
     * @var string New Product Identification. PRO_VERSION: Professional Edition; FLAGSHIP: Premium Edition
     */
    public $NewSubProductCode;

    /**
     * @var integer Scale-up/Scale-down Count, which is ignored for reconfiguration sub-product
     */
    public $InquireNum;

    /**
     * @param string $ResourceId Resource ID
     * @param string $NewSubProductCode New Product Identification. PRO_VERSION: Professional Edition; FLAGSHIP: Premium Edition
     * @param integer $InquireNum Scale-up/Scale-down Count, which is ignored for reconfiguration sub-product
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("NewSubProductCode",$param) and $param["NewSubProductCode"] !== null) {
            $this->NewSubProductCode = $param["NewSubProductCode"];
        }

        if (array_key_exists("InquireNum",$param) and $param["InquireNum"] !== null) {
            $this->InquireNum = $param["InquireNum"];
        }
    }
}
