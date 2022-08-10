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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Bot security configuration
 *
 * @method string getSwitch() Obtain Whether to enable bot security configuration
 * @method void setSwitch(string $Switch) Set Whether to enable bot security configuration
 * @method BotManagedRule getManagedRule() Obtain Preset rules
 * @method void setManagedRule(BotManagedRule $ManagedRule) Set Preset rules
 * @method BotManagedRule getUaBotRule() Obtain Not supported currently
 * @method void setUaBotRule(BotManagedRule $UaBotRule) Set Not supported currently
 * @method BotManagedRule getIspBotRule() Obtain Not supported currently
 * @method void setIspBotRule(BotManagedRule $IspBotRule) Set Not supported currently
 * @method BotPortraitRule getPortraitRule() Obtain User portrait rules
 * @method void setPortraitRule(BotPortraitRule $PortraitRule) Set User portrait rules
 * @method IntelligenceRule getIntelligenceRule() Obtain Bot intelligence rules
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIntelligenceRule(IntelligenceRule $IntelligenceRule) Set Bot intelligence rules
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BotConfig extends AbstractModel
{
    /**
     * @var string Whether to enable bot security configuration
     */
    public $Switch;

    /**
     * @var BotManagedRule Preset rules
     */
    public $ManagedRule;

    /**
     * @var BotManagedRule Not supported currently
     */
    public $UaBotRule;

    /**
     * @var BotManagedRule Not supported currently
     */
    public $IspBotRule;

    /**
     * @var BotPortraitRule User portrait rules
     */
    public $PortraitRule;

    /**
     * @var IntelligenceRule Bot intelligence rules
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IntelligenceRule;

    /**
     * @param string $Switch Whether to enable bot security configuration
     * @param BotManagedRule $ManagedRule Preset rules
     * @param BotManagedRule $UaBotRule Not supported currently
     * @param BotManagedRule $IspBotRule Not supported currently
     * @param BotPortraitRule $PortraitRule User portrait rules
     * @param IntelligenceRule $IntelligenceRule Bot intelligence rules
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("ManagedRule",$param) and $param["ManagedRule"] !== null) {
            $this->ManagedRule = new BotManagedRule();
            $this->ManagedRule->deserialize($param["ManagedRule"]);
        }

        if (array_key_exists("UaBotRule",$param) and $param["UaBotRule"] !== null) {
            $this->UaBotRule = new BotManagedRule();
            $this->UaBotRule->deserialize($param["UaBotRule"]);
        }

        if (array_key_exists("IspBotRule",$param) and $param["IspBotRule"] !== null) {
            $this->IspBotRule = new BotManagedRule();
            $this->IspBotRule->deserialize($param["IspBotRule"]);
        }

        if (array_key_exists("PortraitRule",$param) and $param["PortraitRule"] !== null) {
            $this->PortraitRule = new BotPortraitRule();
            $this->PortraitRule->deserialize($param["PortraitRule"]);
        }

        if (array_key_exists("IntelligenceRule",$param) and $param["IntelligenceRule"] !== null) {
            $this->IntelligenceRule = new IntelligenceRule();
            $this->IntelligenceRule->deserialize($param["IntelligenceRule"]);
        }
    }
}
