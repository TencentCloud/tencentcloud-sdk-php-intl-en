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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The test task status
 *
 * @method string getUrl() Obtain The URL.
 * @method void setUrl(string $Url) Set The URL.
 * @method boolean getTls() Obtain Whether the URL uses HTTPS.
 * @method void setTls(boolean $Tls) Set Whether the URL uses HTTPS.
 * @method string getCreatedOn() Obtain Creation time of the task.
 * @method void setCreatedOn(string $CreatedOn) Set Creation time of the task.
 * @method integer getStatusCode() Obtain The task status. Values:
<li>`200`: The task completed.</li>
<li>`100`: The task is running.</li>
<li>`503`: The task failed./li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatusCode(integer $StatusCode) Set The task status. Values:
<li>`200`: The task completed.</li>
<li>`100`: The task is running.</li>
<li>`503`: The task failed./li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUA() Obtain The user agent.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUA(string $UA) Set The user agent.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getConnectivity() Obtain The network environment.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConnectivity(string $Connectivity) Set The network environment.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getReachable() Obtain Whether the URL is reachable. Values:
<li>`true`: Yes</li>
<li>`false`: No</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReachable(boolean $Reachable) Set Whether the URL is reachable. Values:
<li>`true`: Yes</li>
<li>`false`: No</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getTimedOut() Obtain Whether the URL connection timed out. Values:
<li>`true`: Yes</li>
<li>`false`: No</li>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTimedOut(boolean $TimedOut) Set Whether the URL connection timed out. Values:
<li>`true`: Yes</li>
<li>`false`: No</li>
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SpeedTestingStatus extends AbstractModel
{
    /**
     * @var string The URL.
     */
    public $Url;

    /**
     * @var boolean Whether the URL uses HTTPS.
     */
    public $Tls;

    /**
     * @var string Creation time of the task.
     */
    public $CreatedOn;

    /**
     * @var integer The task status. Values:
<li>`200`: The task completed.</li>
<li>`100`: The task is running.</li>
<li>`503`: The task failed./li>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StatusCode;

    /**
     * @var string The user agent.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UA;

    /**
     * @var string The network environment.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Connectivity;

    /**
     * @var boolean Whether the URL is reachable. Values:
<li>`true`: Yes</li>
<li>`false`: No</li>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Reachable;

    /**
     * @var boolean Whether the URL connection timed out. Values:
<li>`true`: Yes</li>
<li>`false`: No</li>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TimedOut;

    /**
     * @param string $Url The URL.
     * @param boolean $Tls Whether the URL uses HTTPS.
     * @param string $CreatedOn Creation time of the task.
     * @param integer $StatusCode The task status. Values:
<li>`200`: The task completed.</li>
<li>`100`: The task is running.</li>
<li>`503`: The task failed./li>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UA The user agent.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Connectivity The network environment.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $Reachable Whether the URL is reachable. Values:
<li>`true`: Yes</li>
<li>`false`: No</li>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $TimedOut Whether the URL connection timed out. Values:
<li>`true`: Yes</li>
<li>`false`: No</li>
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Tls",$param) and $param["Tls"] !== null) {
            $this->Tls = $param["Tls"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

        if (array_key_exists("UA",$param) and $param["UA"] !== null) {
            $this->UA = $param["UA"];
        }

        if (array_key_exists("Connectivity",$param) and $param["Connectivity"] !== null) {
            $this->Connectivity = $param["Connectivity"];
        }

        if (array_key_exists("Reachable",$param) and $param["Reachable"] !== null) {
            $this->Reachable = $param["Reachable"];
        }

        if (array_key_exists("TimedOut",$param) and $param["TimedOut"] !== null) {
            $this->TimedOut = $param["TimedOut"];
        }
    }
}
