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
 * Describes the client device configuration.
 *
 * @method string getClientType() Obtain Client device type. valid values: <li>iOS;</li> <li>Android;</li> <li>WebView.</li>.
 * @method void setClientType(string $ClientType) Set Client device type. valid values: <li>iOS;</li> <li>Android;</li> <li>WebView.</li>.
 * @method integer getHighRiskMinScore() Obtain The minimum value to determine a request as high-risk ranges from 1–99. the larger the value, the higher the request risk, and the closer it resembles a request initiated by a Bot client. the default value is 50, corresponding to high-risk for values 51–100.
 * @method void setHighRiskMinScore(integer $HighRiskMinScore) Set The minimum value to determine a request as high-risk ranges from 1–99. the larger the value, the higher the request risk, and the closer it resembles a request initiated by a Bot client. the default value is 50, corresponding to high-risk for values 51–100.
 * @method SecurityAction getHighRiskRequestAction() Obtain Handling method for high-risk requests. valid values for SecurityAction Name: <li>Deny: block;</li> <li>Monitor: observation;</li> <li>Redirect: redirection;</li> <li>Challenge: Challenge.</li> default value: Monitor.
 * @method void setHighRiskRequestAction(SecurityAction $HighRiskRequestAction) Set Handling method for high-risk requests. valid values for SecurityAction Name: <li>Deny: block;</li> <li>Monitor: observation;</li> <li>Redirect: redirection;</li> <li>Challenge: Challenge.</li> default value: Monitor.
 * @method integer getMediumRiskMinScore() Obtain Specifies the minimum value to determine a request as medium-risk. value range: 1–99. the larger the value, the higher the request risk, resembling requests initiated by a Bot client. default value: 15, corresponding to medium-risk for values 16–50.
 * @method void setMediumRiskMinScore(integer $MediumRiskMinScore) Set Specifies the minimum value to determine a request as medium-risk. value range: 1–99. the larger the value, the higher the request risk, resembling requests initiated by a Bot client. default value: 15, corresponding to medium-risk for values 16–50.
 * @method SecurityAction getMediumRiskRequestAction() Obtain Handling method for medium-risk requests. SecurityAction Name parameter supports: <li>Deny: block;</li> <li>Monitor: observe;</li> <li>Redirect: Redirect;</li> <li>Challenge: Challenge.</li> default value is Monitor.
 * @method void setMediumRiskRequestAction(SecurityAction $MediumRiskRequestAction) Set Handling method for medium-risk requests. SecurityAction Name parameter supports: <li>Deny: block;</li> <li>Monitor: observe;</li> <li>Redirect: Redirect;</li> <li>Challenge: Challenge.</li> default value is Monitor.
 */
class DeviceProfile extends AbstractModel
{
    /**
     * @var string Client device type. valid values: <li>iOS;</li> <li>Android;</li> <li>WebView.</li>.
     */
    public $ClientType;

    /**
     * @var integer The minimum value to determine a request as high-risk ranges from 1–99. the larger the value, the higher the request risk, and the closer it resembles a request initiated by a Bot client. the default value is 50, corresponding to high-risk for values 51–100.
     */
    public $HighRiskMinScore;

    /**
     * @var SecurityAction Handling method for high-risk requests. valid values for SecurityAction Name: <li>Deny: block;</li> <li>Monitor: observation;</li> <li>Redirect: redirection;</li> <li>Challenge: Challenge.</li> default value: Monitor.
     */
    public $HighRiskRequestAction;

    /**
     * @var integer Specifies the minimum value to determine a request as medium-risk. value range: 1–99. the larger the value, the higher the request risk, resembling requests initiated by a Bot client. default value: 15, corresponding to medium-risk for values 16–50.
     */
    public $MediumRiskMinScore;

    /**
     * @var SecurityAction Handling method for medium-risk requests. SecurityAction Name parameter supports: <li>Deny: block;</li> <li>Monitor: observe;</li> <li>Redirect: Redirect;</li> <li>Challenge: Challenge.</li> default value is Monitor.
     */
    public $MediumRiskRequestAction;

    /**
     * @param string $ClientType Client device type. valid values: <li>iOS;</li> <li>Android;</li> <li>WebView.</li>.
     * @param integer $HighRiskMinScore The minimum value to determine a request as high-risk ranges from 1–99. the larger the value, the higher the request risk, and the closer it resembles a request initiated by a Bot client. the default value is 50, corresponding to high-risk for values 51–100.
     * @param SecurityAction $HighRiskRequestAction Handling method for high-risk requests. valid values for SecurityAction Name: <li>Deny: block;</li> <li>Monitor: observation;</li> <li>Redirect: redirection;</li> <li>Challenge: Challenge.</li> default value: Monitor.
     * @param integer $MediumRiskMinScore Specifies the minimum value to determine a request as medium-risk. value range: 1–99. the larger the value, the higher the request risk, resembling requests initiated by a Bot client. default value: 15, corresponding to medium-risk for values 16–50.
     * @param SecurityAction $MediumRiskRequestAction Handling method for medium-risk requests. SecurityAction Name parameter supports: <li>Deny: block;</li> <li>Monitor: observe;</li> <li>Redirect: Redirect;</li> <li>Challenge: Challenge.</li> default value is Monitor.
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
        if (array_key_exists("ClientType",$param) and $param["ClientType"] !== null) {
            $this->ClientType = $param["ClientType"];
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
