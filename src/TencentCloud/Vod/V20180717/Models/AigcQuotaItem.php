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
 * @method string getQuotaType() Obtain 
 * @method void setQuotaType(string $QuotaType) Set 
 * @method string getApiToken() Obtain 
 * @method void setApiToken(string $ApiToken) Set 
 * @method integer getQuotaLimit() Obtain 
 * @method void setQuotaLimit(integer $QuotaLimit) Set 
 * @method integer getUsage() Obtain 
 * @method void setUsage(integer $Usage) Set 
 */
class AigcQuotaItem extends AbstractModel
{
    /**
     * @var string 
     */
    public $QuotaType;

    /**
     * @var string 
     */
    public $ApiToken;

    /**
     * @var integer 
     */
    public $QuotaLimit;

    /**
     * @var integer 
     */
    public $Usage;

    /**
     * @param string $QuotaType 
     * @param string $ApiToken 
     * @param integer $QuotaLimit 
     * @param integer $Usage 
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
        if (array_key_exists("QuotaType",$param) and $param["QuotaType"] !== null) {
            $this->QuotaType = $param["QuotaType"];
        }

        if (array_key_exists("ApiToken",$param) and $param["ApiToken"] !== null) {
            $this->ApiToken = $param["ApiToken"];
        }

        if (array_key_exists("QuotaLimit",$param) and $param["QuotaLimit"] !== null) {
            $this->QuotaLimit = $param["QuotaLimit"];
        }

        if (array_key_exists("Usage",$param) and $param["Usage"] !== null) {
            $this->Usage = $param["Usage"];
        }
    }
}
