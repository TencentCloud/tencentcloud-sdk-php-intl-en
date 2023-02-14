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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDidService request structure.
 *
 * @method string getConsortiumName() Obtain The consortium name.
 * @method void setConsortiumName(string $ConsortiumName) Set The consortium name.
 * @method integer getConsortiumId() Obtain The consortium ID.
 * @method void setConsortiumId(integer $ConsortiumId) Set The consortium ID.
 * @method integer getGroupId() Obtain The group ID.
 * @method void setGroupId(integer $GroupId) Set The group ID.
 * @method string getAgencyName() Obtain The organization name.
 * @method void setAgencyName(string $AgencyName) Set The organization name.
 * @method string getAppName() Obtain The application name.
 * @method void setAppName(string $AppName) Set The application name.
 * @method string getClusterId() Obtain The network ID.
 * @method void setClusterId(string $ClusterId) Set The network ID.
 * @method string getGroupName() Obtain The group name.
 * @method void setGroupName(string $GroupName) Set The group name.
 */
class CreateDidServiceRequest extends AbstractModel
{
    /**
     * @var string The consortium name.
     */
    public $ConsortiumName;

    /**
     * @var integer The consortium ID.
     */
    public $ConsortiumId;

    /**
     * @var integer The group ID.
     */
    public $GroupId;

    /**
     * @var string The organization name.
     */
    public $AgencyName;

    /**
     * @var string The application name.
     */
    public $AppName;

    /**
     * @var string The network ID.
     */
    public $ClusterId;

    /**
     * @var string The group name.
     */
    public $GroupName;

    /**
     * @param string $ConsortiumName The consortium name.
     * @param integer $ConsortiumId The consortium ID.
     * @param integer $GroupId The group ID.
     * @param string $AgencyName The organization name.
     * @param string $AppName The application name.
     * @param string $ClusterId The network ID.
     * @param string $GroupName The group name.
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
        if (array_key_exists("ConsortiumName",$param) and $param["ConsortiumName"] !== null) {
            $this->ConsortiumName = $param["ConsortiumName"];
        }

        if (array_key_exists("ConsortiumId",$param) and $param["ConsortiumId"] !== null) {
            $this->ConsortiumId = $param["ConsortiumId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("AgencyName",$param) and $param["AgencyName"] !== null) {
            $this->AgencyName = $param["AgencyName"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }
    }
}
