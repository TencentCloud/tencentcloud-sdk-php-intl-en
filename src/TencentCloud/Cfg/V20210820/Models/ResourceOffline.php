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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Decommissioned resource
 *
 * @method integer getResourceId() Obtain Resource ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourceId(integer $ResourceId) Set Resource ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getResourceDeleteTime() Obtain Resource decommissioning time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourceDeleteTime(string $ResourceDeleteTime) Set Resource decommissioning time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getResourceDeleteMessage() Obtain Resource decommissioning reminder
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResourceDeleteMessage(string $ResourceDeleteMessage) Set Resource decommissioning reminder
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ResourceOffline extends AbstractModel
{
    /**
     * @var integer Resource ID

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceId;

    /**
     * @var string Resource decommissioning time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceDeleteTime;

    /**
     * @var string Resource decommissioning reminder
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResourceDeleteMessage;

    /**
     * @param integer $ResourceId Resource ID

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ResourceDeleteTime Resource decommissioning time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ResourceDeleteMessage Resource decommissioning reminder
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceDeleteTime",$param) and $param["ResourceDeleteTime"] !== null) {
            $this->ResourceDeleteTime = $param["ResourceDeleteTime"];
        }

        if (array_key_exists("ResourceDeleteMessage",$param) and $param["ResourceDeleteMessage"] !== null) {
            $this->ResourceDeleteMessage = $param["ResourceDeleteMessage"];
        }
    }
}
