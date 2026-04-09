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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Foundation of Web security BOT rule architecture.
 *
 * @method CAPTCHAPageChallenge getCAPTCHAPageChallenge() Obtain Configuration of the human-machine verification page.
 * @method void setCAPTCHAPageChallenge(CAPTCHAPageChallenge $CAPTCHAPageChallenge) Set Configuration of the human-machine verification page.
 * @method AICrawlerDetection getAICrawlerDetection() Obtain AI crawler detection configuration.
 * @method void setAICrawlerDetection(AICrawlerDetection $AICrawlerDetection) Set AI crawler detection configuration.
 */
class BotManagementLite extends AbstractModel
{
    /**
     * @var CAPTCHAPageChallenge Configuration of the human-machine verification page.
     */
    public $CAPTCHAPageChallenge;

    /**
     * @var AICrawlerDetection AI crawler detection configuration.
     */
    public $AICrawlerDetection;

    /**
     * @param CAPTCHAPageChallenge $CAPTCHAPageChallenge Configuration of the human-machine verification page.
     * @param AICrawlerDetection $AICrawlerDetection AI crawler detection configuration.
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
        if (array_key_exists("CAPTCHAPageChallenge",$param) and $param["CAPTCHAPageChallenge"] !== null) {
            $this->CAPTCHAPageChallenge = new CAPTCHAPageChallenge();
            $this->CAPTCHAPageChallenge->deserialize($param["CAPTCHAPageChallenge"]);
        }

        if (array_key_exists("AICrawlerDetection",$param) and $param["AICrawlerDetection"] !== null) {
            $this->AICrawlerDetection = new AICrawlerDetection();
            $this->AICrawlerDetection->deserialize($param["AICrawlerDetection"]);
        }
    }
}
