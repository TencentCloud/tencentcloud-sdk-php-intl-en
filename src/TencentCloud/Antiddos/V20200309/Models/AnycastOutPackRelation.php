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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method integer getNormalBandwidth() Obtain 
 * @method void setNormalBandwidth(integer $NormalBandwidth) Set 
 * @method integer getForwardRulesLimit() Obtain 
 * @method void setForwardRulesLimit(integer $ForwardRulesLimit) Set 
 * @method integer getAutoRenewFlag() Obtain 
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set 
 * @method string getCurDeadline() Obtain 
 * @method void setCurDeadline(string $CurDeadline) Set 
 */
class AnycastOutPackRelation extends AbstractModel
{
    /**
     * @var integer 
     */
    public $NormalBandwidth;

    /**
     * @var integer 
     */
    public $ForwardRulesLimit;

    /**
     * @var integer 
     */
    public $AutoRenewFlag;

    /**
     * @var string 
     */
    public $CurDeadline;

    /**
     * @param integer $NormalBandwidth 
     * @param integer $ForwardRulesLimit 
     * @param integer $AutoRenewFlag 
     * @param string $CurDeadline 
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
        if (array_key_exists("NormalBandwidth",$param) and $param["NormalBandwidth"] !== null) {
            $this->NormalBandwidth = $param["NormalBandwidth"];
        }

        if (array_key_exists("ForwardRulesLimit",$param) and $param["ForwardRulesLimit"] !== null) {
            $this->ForwardRulesLimit = $param["ForwardRulesLimit"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("CurDeadline",$param) and $param["CurDeadline"] !== null) {
            $this->CurDeadline = $param["CurDeadline"];
        }
    }
}
