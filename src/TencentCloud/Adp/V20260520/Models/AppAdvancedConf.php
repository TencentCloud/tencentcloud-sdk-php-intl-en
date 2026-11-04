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
 * Advanced app configuration
 *
 * @method boolean getEnableContextRewrite() Obtain <p>Whether to enable context rewrite</p>
 * @method void setEnableContextRewrite(boolean $EnableContextRewrite) Set <p>Whether to enable context rewrite</p>
 * @method boolean getEnableImageTextRetrieval() Obtain <p>Whether to enable image and text retrieval.</p>
 * @method void setEnableImageTextRetrieval(boolean $EnableImageTextRetrieval) Set <p>Whether to enable image and text retrieval.</p>
 * @method integer getReplyFlexibility() Obtain <p>Reply flexibility</p>
 * @method void setReplyFlexibility(integer $ReplyFlexibility) Set <p>Reply flexibility</p>
 * @method DialogCustomConfig getDialogCustomConfig() Obtain <p>Custom configuration on the dialogue side (shared across all modes, with permission to modify configuration dynamically during a dialogue)</p>
 * @method void setDialogCustomConfig(DialogCustomConfig $DialogCustomConfig) Set <p>Custom configuration on the dialogue side (shared across all modes, with permission to modify configuration dynamically during a dialogue)</p>
 * @method array getIntentAchievement() Obtain <p>Intent attainment priority</p>
 * @method void setIntentAchievement(array $IntentAchievement) Set <p>Intent attainment priority</p>
 */
class AppAdvancedConf extends AbstractModel
{
    /**
     * @var boolean <p>Whether to enable context rewrite</p>
     */
    public $EnableContextRewrite;

    /**
     * @var boolean <p>Whether to enable image and text retrieval.</p>
     */
    public $EnableImageTextRetrieval;

    /**
     * @var integer <p>Reply flexibility</p>
     */
    public $ReplyFlexibility;

    /**
     * @var DialogCustomConfig <p>Custom configuration on the dialogue side (shared across all modes, with permission to modify configuration dynamically during a dialogue)</p>
     */
    public $DialogCustomConfig;

    /**
     * @var array <p>Intent attainment priority</p>
     */
    public $IntentAchievement;

    /**
     * @param boolean $EnableContextRewrite <p>Whether to enable context rewrite</p>
     * @param boolean $EnableImageTextRetrieval <p>Whether to enable image and text retrieval.</p>
     * @param integer $ReplyFlexibility <p>Reply flexibility</p>
     * @param DialogCustomConfig $DialogCustomConfig <p>Custom configuration on the dialogue side (shared across all modes, with permission to modify configuration dynamically during a dialogue)</p>
     * @param array $IntentAchievement <p>Intent attainment priority</p>
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
        if (array_key_exists("EnableContextRewrite",$param) and $param["EnableContextRewrite"] !== null) {
            $this->EnableContextRewrite = $param["EnableContextRewrite"];
        }

        if (array_key_exists("EnableImageTextRetrieval",$param) and $param["EnableImageTextRetrieval"] !== null) {
            $this->EnableImageTextRetrieval = $param["EnableImageTextRetrieval"];
        }

        if (array_key_exists("ReplyFlexibility",$param) and $param["ReplyFlexibility"] !== null) {
            $this->ReplyFlexibility = $param["ReplyFlexibility"];
        }

        if (array_key_exists("DialogCustomConfig",$param) and $param["DialogCustomConfig"] !== null) {
            $this->DialogCustomConfig = new DialogCustomConfig();
            $this->DialogCustomConfig->deserialize($param["DialogCustomConfig"]);
        }

        if (array_key_exists("IntentAchievement",$param) and $param["IntentAchievement"] !== null) {
            $this->IntentAchievement = [];
            foreach ($param["IntentAchievement"] as $key => $value){
                $obj = new IntentAchievementInfo();
                $obj->deserialize($value);
                array_push($this->IntentAchievement, $obj);
            }
        }
    }
}
