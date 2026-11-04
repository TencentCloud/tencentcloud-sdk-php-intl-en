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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PluginOperation
 *
 * @method boolean getAllowExternalAccess() Obtain Whether external calls are allowed
 * @method void setAllowExternalAccess(boolean $AllowExternalAccess) Set Whether external calls are allowed
 * @method integer getBillingType() Obtain <p>Billing type.</p><p>Valid values:</p><ul><li>0: free</li><li>1: open beta</li><li>2: official fees</li></ul>
 * @method void setBillingType(integer $BillingType) Set <p>Billing type.</p><p>Valid values:</p><ul><li>0: free</li><li>1: open beta</li><li>2: official fees</li></ul>
 * @method string getCategoryKey() Obtain Plug-in category identifier
 * @method void setCategoryKey(string $CategoryKey) Set Plug-in category identifier
 * @method string getIntroduction() Obtain Plug-in overview
 * @method void setIntroduction(string $Introduction) Set Plug-in overview
 * @method boolean getIsRecommended() Obtain Whether it is a selection
 * @method void setIsRecommended(boolean $IsRecommended) Set Whether it is a selection
 */
class PluginOperation extends AbstractModel
{
    /**
     * @var boolean Whether external calls are allowed
     */
    public $AllowExternalAccess;

    /**
     * @var integer <p>Billing type.</p><p>Valid values:</p><ul><li>0: free</li><li>1: open beta</li><li>2: official fees</li></ul>
     */
    public $BillingType;

    /**
     * @var string Plug-in category identifier
     */
    public $CategoryKey;

    /**
     * @var string Plug-in overview
     */
    public $Introduction;

    /**
     * @var boolean Whether it is a selection
     */
    public $IsRecommended;

    /**
     * @param boolean $AllowExternalAccess Whether external calls are allowed
     * @param integer $BillingType <p>Billing type.</p><p>Valid values:</p><ul><li>0: free</li><li>1: open beta</li><li>2: official fees</li></ul>
     * @param string $CategoryKey Plug-in category identifier
     * @param string $Introduction Plug-in overview
     * @param boolean $IsRecommended Whether it is a selection
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
        if (array_key_exists("AllowExternalAccess",$param) and $param["AllowExternalAccess"] !== null) {
            $this->AllowExternalAccess = $param["AllowExternalAccess"];
        }

        if (array_key_exists("BillingType",$param) and $param["BillingType"] !== null) {
            $this->BillingType = $param["BillingType"];
        }

        if (array_key_exists("CategoryKey",$param) and $param["CategoryKey"] !== null) {
            $this->CategoryKey = $param["CategoryKey"];
        }

        if (array_key_exists("Introduction",$param) and $param["Introduction"] !== null) {
            $this->Introduction = $param["Introduction"];
        }

        if (array_key_exists("IsRecommended",$param) and $param["IsRecommended"] !== null) {
            $this->IsRecommended = $param["IsRecommended"];
        }
    }
}
