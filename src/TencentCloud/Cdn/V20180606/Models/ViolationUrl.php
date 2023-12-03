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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of URLs in violation
 *
 * @method integer getId() Obtain ID
 * @method void setId(integer $Id) Set ID
 * @method string getRealUrl() Obtain Origin access URL of the resource in violation
 * @method void setRealUrl(string $RealUrl) Set Origin access URL of the resource in violation
 * @method string getDownloadUrl() Obtain Snapshot path. This is used to display a snapshot of the content in violation on the console.
 * @method void setDownloadUrl(string $DownloadUrl) Set Snapshot path. This is used to display a snapshot of the content in violation on the console.
 * @method string getUrlStatus() Obtain Current status of non-compliant resource
`forbid`: Blocked
`release`: Unblocked
`delay`: Processing delayed
`reject`: Appeal dismissed. It is still in `forbid` status.
`complain`: Appeal in process
 * @method void setUrlStatus(string $UrlStatus) Set Current status of non-compliant resource
`forbid`: Blocked
`release`: Unblocked
`delay`: Processing delayed
`reject`: Appeal dismissed. It is still in `forbid` status.
`complain`: Appeal in process
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getUpdateTime() Obtain Update time
 * @method void setUpdateTime(string $UpdateTime) Set Update time
 */
class ViolationUrl extends AbstractModel
{
    /**
     * @var integer ID
     */
    public $Id;

    /**
     * @var string Origin access URL of the resource in violation
     */
    public $RealUrl;

    /**
     * @var string Snapshot path. This is used to display a snapshot of the content in violation on the console.
     */
    public $DownloadUrl;

    /**
     * @var string Current status of non-compliant resource
`forbid`: Blocked
`release`: Unblocked
`delay`: Processing delayed
`reject`: Appeal dismissed. It is still in `forbid` status.
`complain`: Appeal in process
     */
    public $UrlStatus;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Update time
     */
    public $UpdateTime;

    /**
     * @param integer $Id ID
     * @param string $RealUrl Origin access URL of the resource in violation
     * @param string $DownloadUrl Snapshot path. This is used to display a snapshot of the content in violation on the console.
     * @param string $UrlStatus Current status of non-compliant resource
`forbid`: Blocked
`release`: Unblocked
`delay`: Processing delayed
`reject`: Appeal dismissed. It is still in `forbid` status.
`complain`: Appeal in process
     * @param string $CreateTime Creation time
     * @param string $UpdateTime Update time
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("RealUrl",$param) and $param["RealUrl"] !== null) {
            $this->RealUrl = $param["RealUrl"];
        }

        if (array_key_exists("DownloadUrl",$param) and $param["DownloadUrl"] !== null) {
            $this->DownloadUrl = $param["DownloadUrl"];
        }

        if (array_key_exists("UrlStatus",$param) and $param["UrlStatus"] !== null) {
            $this->UrlStatus = $param["UrlStatus"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
