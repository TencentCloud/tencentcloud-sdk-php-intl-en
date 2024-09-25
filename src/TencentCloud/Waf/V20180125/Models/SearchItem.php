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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Complex Conditions on Access List Query
 *
 * @method string getClsStatus() Obtain Log switch
 * @method void setClsStatus(string $ClsStatus) Set Log switch
 * @method string getStatus() Obtain WAF Switch
 * @method void setStatus(string $Status) Set WAF Switch
 * @method string getFlowMode() Obtain Traffic mode
 * @method void setFlowMode(string $FlowMode) Set Traffic mode
 */
class SearchItem extends AbstractModel
{
    /**
     * @var string Log switch
     */
    public $ClsStatus;

    /**
     * @var string WAF Switch
     */
    public $Status;

    /**
     * @var string Traffic mode
     */
    public $FlowMode;

    /**
     * @param string $ClsStatus Log switch
     * @param string $Status WAF Switch
     * @param string $FlowMode Traffic mode
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
        if (array_key_exists("ClsStatus",$param) and $param["ClsStatus"] !== null) {
            $this->ClsStatus = $param["ClsStatus"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FlowMode",$param) and $param["FlowMode"] !== null) {
            $this->FlowMode = $param["FlowMode"];
        }
    }
}
