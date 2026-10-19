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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Risk API status
 *
 * @method string getActionName() Obtain API name
 * @method void setActionName(string $ActionName) Set API name
 * @method string getActionNameCn() Obtain Chinese api name
 * @method void setActionNameCn(string $ActionNameCn) Set Chinese api name
 * @method integer getInvokeCount() Obtain Number of calls.
 * @method void setInvokeCount(integer $InvokeCount) Set Number of calls.
 * @method integer getActionAccessTime() Obtain Last access time in Unix timestamp in milliseconds.
 * @method void setActionAccessTime(integer $ActionAccessTime) Set Last access time in Unix timestamp in milliseconds.
 */
class CosRiskActionInfo extends AbstractModel
{
    /**
     * @var string API name
     */
    public $ActionName;

    /**
     * @var string Chinese api name
     */
    public $ActionNameCn;

    /**
     * @var integer Number of calls.
     */
    public $InvokeCount;

    /**
     * @var integer Last access time in Unix timestamp in milliseconds.
     */
    public $ActionAccessTime;

    /**
     * @param string $ActionName API name
     * @param string $ActionNameCn Chinese api name
     * @param integer $InvokeCount Number of calls.
     * @param integer $ActionAccessTime Last access time in Unix timestamp in milliseconds.
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
        if (array_key_exists("ActionName",$param) and $param["ActionName"] !== null) {
            $this->ActionName = $param["ActionName"];
        }

        if (array_key_exists("ActionNameCn",$param) and $param["ActionNameCn"] !== null) {
            $this->ActionNameCn = $param["ActionNameCn"];
        }

        if (array_key_exists("InvokeCount",$param) and $param["InvokeCount"] !== null) {
            $this->InvokeCount = $param["InvokeCount"];
        }

        if (array_key_exists("ActionAccessTime",$param) and $param["ActionAccessTime"] !== null) {
            $this->ActionAccessTime = $param["ActionAccessTime"];
        }
    }
}
