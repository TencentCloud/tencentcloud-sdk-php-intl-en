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
 * User Risk Level configuration. The risk score range is 0–100. The higher the score, the higher the risk.
 *
 * @method integer getHighRiskMinScore() Obtain <p>Minimum risk score for high-risk requests. A request is considered high-risk when its score is equal to or greater than this value.</p><p>Value range: [2, 99]</p><p>Default value: 50</p>
 * @method void setHighRiskMinScore(integer $HighRiskMinScore) Set <p>Minimum risk score for high-risk requests. A request is considered high-risk when its score is equal to or greater than this value.</p><p>Value range: [2, 99]</p><p>Default value: 50</p>
 * @method SecurityAction getHighRiskRequestAction() Obtain <p>Handling method for high-risk requests. Supported values for SecurityAction Name: <li>Deny: block;</li><li>Monitor: observe;</li><li>Redirect: redirect;</li><li>Challenge: challenge.</li>Default value: Monitor</p>
 * @method void setHighRiskRequestAction(SecurityAction $HighRiskRequestAction) Set <p>Handling method for high-risk requests. Supported values for SecurityAction Name: <li>Deny: block;</li><li>Monitor: observe;</li><li>Redirect: redirect;</li><li>Challenge: challenge.</li>Default value: Monitor</p>
 * @method integer getMediumRiskMinScore() Obtain <p>Minimum risk score for a medium-risk request. A score equal to or greater than this value and less than HighRiskMinScore is considered medium-risk; a score lower than this value is considered low risk.</p><p>Value range: [1, 98]</p><p>Default value: 15</p>
 * @method void setMediumRiskMinScore(integer $MediumRiskMinScore) Set <p>Minimum risk score for a medium-risk request. A score equal to or greater than this value and less than HighRiskMinScore is considered medium-risk; a score lower than this value is considered low risk.</p><p>Value range: [1, 98]</p><p>Default value: 15</p>
 * @method SecurityAction getMediumRiskRequestAction() Obtain <p>Handling method for medium-risk requests. Supported values for the Name parameter of SecurityAction: <li>Deny: block;</li><li>Monitor: observe;</li><li>Redirect: redirect;</li><li>Challenge: challenge.</li>Default value: Monitor</p>
 * @method void setMediumRiskRequestAction(SecurityAction $MediumRiskRequestAction) Set <p>Handling method for medium-risk requests. Supported values for the Name parameter of SecurityAction: <li>Deny: block;</li><li>Monitor: observe;</li><li>Redirect: redirect;</li><li>Challenge: challenge.</li>Default value: Monitor</p>
 */
class UserRiskProfile extends AbstractModel
{
    /**
     * @var integer <p>Minimum risk score for high-risk requests. A request is considered high-risk when its score is equal to or greater than this value.</p><p>Value range: [2, 99]</p><p>Default value: 50</p>
     */
    public $HighRiskMinScore;

    /**
     * @var SecurityAction <p>Handling method for high-risk requests. Supported values for SecurityAction Name: <li>Deny: block;</li><li>Monitor: observe;</li><li>Redirect: redirect;</li><li>Challenge: challenge.</li>Default value: Monitor</p>
     */
    public $HighRiskRequestAction;

    /**
     * @var integer <p>Minimum risk score for a medium-risk request. A score equal to or greater than this value and less than HighRiskMinScore is considered medium-risk; a score lower than this value is considered low risk.</p><p>Value range: [1, 98]</p><p>Default value: 15</p>
     */
    public $MediumRiskMinScore;

    /**
     * @var SecurityAction <p>Handling method for medium-risk requests. Supported values for the Name parameter of SecurityAction: <li>Deny: block;</li><li>Monitor: observe;</li><li>Redirect: redirect;</li><li>Challenge: challenge.</li>Default value: Monitor</p>
     */
    public $MediumRiskRequestAction;

    /**
     * @param integer $HighRiskMinScore <p>Minimum risk score for high-risk requests. A request is considered high-risk when its score is equal to or greater than this value.</p><p>Value range: [2, 99]</p><p>Default value: 50</p>
     * @param SecurityAction $HighRiskRequestAction <p>Handling method for high-risk requests. Supported values for SecurityAction Name: <li>Deny: block;</li><li>Monitor: observe;</li><li>Redirect: redirect;</li><li>Challenge: challenge.</li>Default value: Monitor</p>
     * @param integer $MediumRiskMinScore <p>Minimum risk score for a medium-risk request. A score equal to or greater than this value and less than HighRiskMinScore is considered medium-risk; a score lower than this value is considered low risk.</p><p>Value range: [1, 98]</p><p>Default value: 15</p>
     * @param SecurityAction $MediumRiskRequestAction <p>Handling method for medium-risk requests. Supported values for the Name parameter of SecurityAction: <li>Deny: block;</li><li>Monitor: observe;</li><li>Redirect: redirect;</li><li>Challenge: challenge.</li>Default value: Monitor</p>
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
        if (array_key_exists("HighRiskMinScore",$param) and $param["HighRiskMinScore"] !== null) {
            $this->HighRiskMinScore = $param["HighRiskMinScore"];
        }

        if (array_key_exists("HighRiskRequestAction",$param) and $param["HighRiskRequestAction"] !== null) {
            $this->HighRiskRequestAction = new SecurityAction();
            $this->HighRiskRequestAction->deserialize($param["HighRiskRequestAction"]);
        }

        if (array_key_exists("MediumRiskMinScore",$param) and $param["MediumRiskMinScore"] !== null) {
            $this->MediumRiskMinScore = $param["MediumRiskMinScore"];
        }

        if (array_key_exists("MediumRiskRequestAction",$param) and $param["MediumRiskRequestAction"] !== null) {
            $this->MediumRiskRequestAction = new SecurityAction();
            $this->MediumRiskRequestAction->deserialize($param["MediumRiskRequestAction"]);
        }
    }
}
