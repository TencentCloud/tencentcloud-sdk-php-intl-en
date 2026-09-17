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
 * 
 *
 * @method string getStatus() Obtain 
 * @method void setStatus(string $Status) Set 
 * @method string getAuthType() Obtain 
 * @method void setAuthType(string $AuthType) Set 
 * @method array getReferers() Obtain 
 * @method void setReferers(array $Referers) Set 
 * @method string getBlankRefererAllowed() Obtain 
 * @method void setBlankRefererAllowed(string $BlankRefererAllowed) Set 
 */
class RefererAuthPolicy extends AbstractModel
{
    /**
     * @var string 
     */
    public $Status;

    /**
     * @var string 
     */
    public $AuthType;

    /**
     * @var array 
     */
    public $Referers;

    /**
     * @var string 
     */
    public $BlankRefererAllowed;

    /**
     * @param string $Status 
     * @param string $AuthType 
     * @param array $Referers 
     * @param string $BlankRefererAllowed 
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("Referers",$param) and $param["Referers"] !== null) {
            $this->Referers = $param["Referers"];
        }

        if (array_key_exists("BlankRefererAllowed",$param) and $param["BlankRefererAllowed"] !== null) {
            $this->BlankRefererAllowed = $param["BlankRefererAllowed"];
        }
    }
}
