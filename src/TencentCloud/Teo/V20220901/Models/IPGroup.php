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
 * IP range group
 *
 * @method integer getGroupId() Obtain Group ID. Enter `0`.
 * @method void setGroupId(integer $GroupId) Set Group ID. Enter `0`.
 * @method string getName() Obtain Group name.
 * @method void setName(string $Name) Set Group name.
 * @method array getContent() Obtain IP group content, supports ip and ip range.
 * @method void setContent(array $Content) Set IP group content, supports ip and ip range.
 * @method integer getIPTotalCount() Obtain Number of ips or ranges in effect in the IP group. valid as an output parameter, no need to specify this field as an input parameter.
 * @method void setIPTotalCount(integer $IPTotalCount) Set Number of ips or ranges in effect in the IP group. valid as an output parameter, no need to specify this field as an input parameter.
 * @method array getIPExpireInfo() Obtain Specifies the scheduled expiration information of the IP.
Specifies the IP address or IP range configuration with scheduled expiration time as an input parameter.
As an output parameter, contains the following two categories of information.
<Li>Currently not expired scheduled expiration information: expiration configuration not triggered.</li>.
<Li>Scheduled expiration information expired within a week: cache expiration configuration has been triggered.</li>.
 * @method void setIPExpireInfo(array $IPExpireInfo) Set Specifies the scheduled expiration information of the IP.
Specifies the IP address or IP range configuration with scheduled expiration time as an input parameter.
As an output parameter, contains the following two categories of information.
<Li>Currently not expired scheduled expiration information: expiration configuration not triggered.</li>.
<Li>Scheduled expiration information expired within a week: cache expiration configuration has been triggered.</li>.
 */
class IPGroup extends AbstractModel
{
    /**
     * @var integer Group ID. Enter `0`.
     */
    public $GroupId;

    /**
     * @var string Group name.
     */
    public $Name;

    /**
     * @var array IP group content, supports ip and ip range.
     */
    public $Content;

    /**
     * @var integer Number of ips or ranges in effect in the IP group. valid as an output parameter, no need to specify this field as an input parameter.
     */
    public $IPTotalCount;

    /**
     * @var array Specifies the scheduled expiration information of the IP.
Specifies the IP address or IP range configuration with scheduled expiration time as an input parameter.
As an output parameter, contains the following two categories of information.
<Li>Currently not expired scheduled expiration information: expiration configuration not triggered.</li>.
<Li>Scheduled expiration information expired within a week: cache expiration configuration has been triggered.</li>.
     */
    public $IPExpireInfo;

    /**
     * @param integer $GroupId Group ID. Enter `0`.
     * @param string $Name Group name.
     * @param array $Content IP group content, supports ip and ip range.
     * @param integer $IPTotalCount Number of ips or ranges in effect in the IP group. valid as an output parameter, no need to specify this field as an input parameter.
     * @param array $IPExpireInfo Specifies the scheduled expiration information of the IP.
Specifies the IP address or IP range configuration with scheduled expiration time as an input parameter.
As an output parameter, contains the following two categories of information.
<Li>Currently not expired scheduled expiration information: expiration configuration not triggered.</li>.
<Li>Scheduled expiration information expired within a week: cache expiration configuration has been triggered.</li>.
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("IPTotalCount",$param) and $param["IPTotalCount"] !== null) {
            $this->IPTotalCount = $param["IPTotalCount"];
        }

        if (array_key_exists("IPExpireInfo",$param) and $param["IPExpireInfo"] !== null) {
            $this->IPExpireInfo = [];
            foreach ($param["IPExpireInfo"] as $key => $value){
                $obj = new IPExpireInfo();
                $obj->deserialize($value);
                array_push($this->IPExpireInfo, $obj);
            }
        }
    }
}
