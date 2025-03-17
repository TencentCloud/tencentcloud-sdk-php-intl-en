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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Alert notification recipient group.
 *
 * @method string getNoticeId() Obtain Notice ID.

Note: This field may return null, indicating that no valid value is found.
 * @method void setNoticeId(string $NoticeId) Set Notice ID.

Note: This field may return null, indicating that no valid value is found.
 * @method string getAMPConsumerId() Obtain Consumer ID.

Note: This field may return null, indicating that no valid value is found.
 * @method void setAMPConsumerId(string $AMPConsumerId) Set Consumer ID.

Note: This field may return null, indicating that no valid value is found.
 * @method string getProjectId() Obtain Project ID.

Note: This field may return null, indicating that no valid value is found.
 * @method void setProjectId(string $ProjectId) Set Project ID.

Note: This field may return null, indicating that no valid value is found.
 * @method integer getStatus() Obtain Status.

Note: This field may return null, indicating that no valid value is found.
 * @method void setStatus(integer $Status) Set Status.

Note: This field may return null, indicating that no valid value is found.
 * @method string getCreatedAt() Obtain Create time.

Note: This field may return null, indicating that no valid value is found.
 * @method void setCreatedAt(string $CreatedAt) Set Create time.

Note: This field may return null, indicating that no valid value is found.
 * @method string getUpdatedAt() Obtain Update time.

Note: This field may return null, indicating that no valid value is found.
 * @method void setUpdatedAt(string $UpdatedAt) Set Update time.

Note: This field may return null, indicating that no valid value is found.
 * @method integer getAppId() Obtain App ID.

Note: This field may return null, indicating that no valid value is found.
 * @method void setAppId(integer $AppId) Set App ID.

Note: This field may return null, indicating that no valid value is found.
 * @method string getUin() Obtain Account uin.

Note: This field may return null, indicating that no valid value is found.
 * @method void setUin(string $Uin) Set Account uin.

Note: This field may return null, indicating that no valid value is found.
 * @method string getSubAccountUin() Obtain Sub account uin.

Note: This field may return null, indicating that no valid value is found.
 * @method void setSubAccountUin(string $SubAccountUin) Set Sub account uin.

Note: This field may return null, indicating that no valid value is found.
 */
class AlertChannelRecord extends AbstractModel
{
    /**
     * @var string Notice ID.

Note: This field may return null, indicating that no valid value is found.
     */
    public $NoticeId;

    /**
     * @var string Consumer ID.

Note: This field may return null, indicating that no valid value is found.
     */
    public $AMPConsumerId;

    /**
     * @var string Project ID.

Note: This field may return null, indicating that no valid value is found.
     */
    public $ProjectId;

    /**
     * @var integer Status.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Status;

    /**
     * @var string Create time.

Note: This field may return null, indicating that no valid value is found.
     */
    public $CreatedAt;

    /**
     * @var string Update time.

Note: This field may return null, indicating that no valid value is found.
     */
    public $UpdatedAt;

    /**
     * @var integer App ID.

Note: This field may return null, indicating that no valid value is found.
     */
    public $AppId;

    /**
     * @var string Account uin.

Note: This field may return null, indicating that no valid value is found.
     */
    public $Uin;

    /**
     * @var string Sub account uin.

Note: This field may return null, indicating that no valid value is found.
     */
    public $SubAccountUin;

    /**
     * @param string $NoticeId Notice ID.

Note: This field may return null, indicating that no valid value is found.
     * @param string $AMPConsumerId Consumer ID.

Note: This field may return null, indicating that no valid value is found.
     * @param string $ProjectId Project ID.

Note: This field may return null, indicating that no valid value is found.
     * @param integer $Status Status.

Note: This field may return null, indicating that no valid value is found.
     * @param string $CreatedAt Create time.

Note: This field may return null, indicating that no valid value is found.
     * @param string $UpdatedAt Update time.

Note: This field may return null, indicating that no valid value is found.
     * @param integer $AppId App ID.

Note: This field may return null, indicating that no valid value is found.
     * @param string $Uin Account uin.

Note: This field may return null, indicating that no valid value is found.
     * @param string $SubAccountUin Sub account uin.

Note: This field may return null, indicating that no valid value is found.
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
        if (array_key_exists("NoticeId",$param) and $param["NoticeId"] !== null) {
            $this->NoticeId = $param["NoticeId"];
        }

        if (array_key_exists("AMPConsumerId",$param) and $param["AMPConsumerId"] !== null) {
            $this->AMPConsumerId = $param["AMPConsumerId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }
    }
}
