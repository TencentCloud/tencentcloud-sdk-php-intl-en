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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Publish digest information
 *
 * @method string getCreateTime() Obtain <p>Creation time (Unix timestamp, in seconds)</p>
 * @method void setCreateTime(string $CreateTime) Set <p>Creation time (Unix timestamp, in seconds)</p>
 * @method string getDescription() Obtain <p>Release description.</p>
 * @method void setDescription(string $Description) Set <p>Release description.</p>
 * @method string getReleaseId() Obtain <p>Release ID</p>
 * @method void setReleaseId(string $ReleaseId) Set <p>Release ID</p>
 * @method integer getStatus() Obtain <p>Released status. Enumeration values: 1: To be released, 2: Releasing, 3: Released successfully, 4: Release failure, 5: Under review, 6: Review successful, 7: Review failed, 8: Callback processing for successful release, 9: Release suspension, 10: Appeal under review, 11: Appeal passed, 12: Appeal not approved</p>
 * @method void setStatus(integer $Status) Set <p>Released status. Enumeration values: 1: To be released, 2: Releasing, 3: Released successfully, 4: Release failure, 5: Under review, 6: Review successful, 7: Review failed, 8: Callback processing for successful release, 9: Release suspension, 10: Appeal under review, 11: Appeal passed, 12: Appeal not approved</p>
 * @method string getStatusDescription() Obtain <p>Status description.</p>
 * @method void setStatusDescription(string $StatusDescription) Set <p>Status description.</p>
 * @method AppShareAccessControl getAppShareAccessControl() Obtain <p>Application sharing access control</p>
 * @method void setAppShareAccessControl(AppShareAccessControl $AppShareAccessControl) Set <p>Application sharing access control</p>
 * @method array getChannelIdList() Obtain <p>Release channel ID list</p>
 * @method void setChannelIdList(array $ChannelIdList) Set <p>Release channel ID list</p>
 * @method CorpShareConfig getCorpShareConfig() Obtain <p>Business shared configuration</p>
 * @method void setCorpShareConfig(CorpShareConfig $CorpShareConfig) Set <p>Business shared configuration</p>
 * @method PortalShareConfig getPortalShareConfig() Obtain <p>portal configuration</p>
 * @method void setPortalShareConfig(PortalShareConfig $PortalShareConfig) Set <p>portal configuration</p>
 */
class ReleaseSummary extends AbstractModel
{
    /**
     * @var string <p>Creation time (Unix timestamp, in seconds)</p>
     */
    public $CreateTime;

    /**
     * @var string <p>Release description.</p>
     */
    public $Description;

    /**
     * @var string <p>Release ID</p>
     */
    public $ReleaseId;

    /**
     * @var integer <p>Released status. Enumeration values: 1: To be released, 2: Releasing, 3: Released successfully, 4: Release failure, 5: Under review, 6: Review successful, 7: Review failed, 8: Callback processing for successful release, 9: Release suspension, 10: Appeal under review, 11: Appeal passed, 12: Appeal not approved</p>
     */
    public $Status;

    /**
     * @var string <p>Status description.</p>
     */
    public $StatusDescription;

    /**
     * @var AppShareAccessControl <p>Application sharing access control</p>
     */
    public $AppShareAccessControl;

    /**
     * @var array <p>Release channel ID list</p>
     */
    public $ChannelIdList;

    /**
     * @var CorpShareConfig <p>Business shared configuration</p>
     */
    public $CorpShareConfig;

    /**
     * @var PortalShareConfig <p>portal configuration</p>
     */
    public $PortalShareConfig;

    /**
     * @param string $CreateTime <p>Creation time (Unix timestamp, in seconds)</p>
     * @param string $Description <p>Release description.</p>
     * @param string $ReleaseId <p>Release ID</p>
     * @param integer $Status <p>Released status. Enumeration values: 1: To be released, 2: Releasing, 3: Released successfully, 4: Release failure, 5: Under review, 6: Review successful, 7: Review failed, 8: Callback processing for successful release, 9: Release suspension, 10: Appeal under review, 11: Appeal passed, 12: Appeal not approved</p>
     * @param string $StatusDescription <p>Status description.</p>
     * @param AppShareAccessControl $AppShareAccessControl <p>Application sharing access control</p>
     * @param array $ChannelIdList <p>Release channel ID list</p>
     * @param CorpShareConfig $CorpShareConfig <p>Business shared configuration</p>
     * @param PortalShareConfig $PortalShareConfig <p>portal configuration</p>
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
        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ReleaseId",$param) and $param["ReleaseId"] !== null) {
            $this->ReleaseId = $param["ReleaseId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDescription",$param) and $param["StatusDescription"] !== null) {
            $this->StatusDescription = $param["StatusDescription"];
        }

        if (array_key_exists("AppShareAccessControl",$param) and $param["AppShareAccessControl"] !== null) {
            $this->AppShareAccessControl = new AppShareAccessControl();
            $this->AppShareAccessControl->deserialize($param["AppShareAccessControl"]);
        }

        if (array_key_exists("ChannelIdList",$param) and $param["ChannelIdList"] !== null) {
            $this->ChannelIdList = $param["ChannelIdList"];
        }

        if (array_key_exists("CorpShareConfig",$param) and $param["CorpShareConfig"] !== null) {
            $this->CorpShareConfig = new CorpShareConfig();
            $this->CorpShareConfig->deserialize($param["CorpShareConfig"]);
        }

        if (array_key_exists("PortalShareConfig",$param) and $param["PortalShareConfig"] !== null) {
            $this->PortalShareConfig = new PortalShareConfig();
            $this->PortalShareConfig->deserialize($param["PortalShareConfig"]);
        }
    }
}
