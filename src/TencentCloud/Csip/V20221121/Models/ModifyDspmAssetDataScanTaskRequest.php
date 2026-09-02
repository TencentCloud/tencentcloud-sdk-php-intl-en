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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDspmAssetDataScanTask request structure.
 *
 * @method array getAssetIds() Obtain Instance ID.
 * @method void setAssetIds(array $AssetIds) Set Instance ID.
 * @method boolean getIsScheduled() Obtain Whether it is a scheduled task
 * @method void setIsScheduled(boolean $IsScheduled) Set Whether it is a scheduled task
 * @method boolean getIsAgreeAuth() Obtain Whether to grant one-click authorization.
 * @method void setIsAgreeAuth(boolean $IsAgreeAuth) Set Whether to grant one-click authorization.
 * @method boolean getIsRunAtOnce() Obtain Whether to execute immediately
 * @method void setIsRunAtOnce(boolean $IsRunAtOnce) Set Whether to execute immediately
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method DspmScheduleConfig getScheduleConfig() Obtain Scheduling cycle configuration
 * @method void setScheduleConfig(DspmScheduleConfig $ScheduleConfig) Set Scheduling cycle configuration
 */
class ModifyDspmAssetDataScanTaskRequest extends AbstractModel
{
    /**
     * @var array Instance ID.
     */
    public $AssetIds;

    /**
     * @var boolean Whether it is a scheduled task
     */
    public $IsScheduled;

    /**
     * @var boolean Whether to grant one-click authorization.
     */
    public $IsAgreeAuth;

    /**
     * @var boolean Whether to execute immediately
     */
    public $IsRunAtOnce;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var DspmScheduleConfig Scheduling cycle configuration
     */
    public $ScheduleConfig;

    /**
     * @param array $AssetIds Instance ID.
     * @param boolean $IsScheduled Whether it is a scheduled task
     * @param boolean $IsAgreeAuth Whether to grant one-click authorization.
     * @param boolean $IsRunAtOnce Whether to execute immediately
     * @param array $MemberId <p>Group account member id</p>
     * @param DspmScheduleConfig $ScheduleConfig Scheduling cycle configuration
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
        if (array_key_exists("AssetIds",$param) and $param["AssetIds"] !== null) {
            $this->AssetIds = $param["AssetIds"];
        }

        if (array_key_exists("IsScheduled",$param) and $param["IsScheduled"] !== null) {
            $this->IsScheduled = $param["IsScheduled"];
        }

        if (array_key_exists("IsAgreeAuth",$param) and $param["IsAgreeAuth"] !== null) {
            $this->IsAgreeAuth = $param["IsAgreeAuth"];
        }

        if (array_key_exists("IsRunAtOnce",$param) and $param["IsRunAtOnce"] !== null) {
            $this->IsRunAtOnce = $param["IsRunAtOnce"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("ScheduleConfig",$param) and $param["ScheduleConfig"] !== null) {
            $this->ScheduleConfig = new DspmScheduleConfig();
            $this->ScheduleConfig->deserialize($param["ScheduleConfig"]);
        }
    }
}
