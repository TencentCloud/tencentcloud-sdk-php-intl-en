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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetAppSecret response structure.
 *
 * @method string getAppKey() Obtain Application key.
 * @method void setAppKey(string $AppKey) Set Application key.
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method boolean getIsRelease() Obtain Whether to release.
 * @method void setIsRelease(boolean $IsRelease) Set Whether to release.
 * @method boolean getHasPermission() Obtain Whether there is permission to view.
 * @method void setHasPermission(boolean $HasPermission) Set Whether there is permission to view.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class GetAppSecretResponse extends AbstractModel
{
    /**
     * @var string Application key.
     */
    public $AppKey;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var boolean Whether to release.
     */
    public $IsRelease;

    /**
     * @var boolean Whether there is permission to view.
     */
    public $HasPermission;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $AppKey Application key.
     * @param string $CreateTime Creation time.
     * @param boolean $IsRelease Whether to release.
     * @param boolean $HasPermission Whether there is permission to view.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("AppKey",$param) and $param["AppKey"] !== null) {
            $this->AppKey = $param["AppKey"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("IsRelease",$param) and $param["IsRelease"] !== null) {
            $this->IsRelease = $param["IsRelease"];
        }

        if (array_key_exists("HasPermission",$param) and $param["HasPermission"] !== null) {
            $this->HasPermission = $param["HasPermission"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
