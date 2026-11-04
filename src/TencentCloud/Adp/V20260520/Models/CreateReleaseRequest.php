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
 * CreateRelease request structure.
 *
 * @method string getAppId() Obtain <p>Application ID.</p>
 * @method void setAppId(string $AppId) Set <p>Application ID.</p>
 * @method AppShareAccessControl getAppShareAccessControl() Obtain <p>App sharing access control configuration</p>
 * @method void setAppShareAccessControl(AppShareAccessControl $AppShareAccessControl) Set <p>App sharing access control configuration</p>
 * @method array getChannelIdList() Obtain <p>Channel ID list</p>
 * @method void setChannelIdList(array $ChannelIdList) Set <p>Channel ID list</p>
 * @method CorpShareConfig getCorpShareConfig() Obtain <p>Business shared configuration</p>
 * @method void setCorpShareConfig(CorpShareConfig $CorpShareConfig) Set <p>Business shared configuration</p>
 * @method string getDescription() Obtain <p>Release description.</p>
 * @method void setDescription(string $Description) Set <p>Release description.</p>
 * @method boolean getIsDevToRelease() Obtain <p>Batch change the debug-only knowledge in the default knowledge base to "effective in both debug and release"</p>
 * @method void setIsDevToRelease(boolean $IsDevToRelease) Set <p>Batch change the debug-only knowledge in the default knowledge base to "effective in both debug and release"</p>
 * @method boolean getIsPublishAsTemplate() Obtain <p>Whether to synchronize publishing as an application template</p>
 * @method void setIsPublishAsTemplate(boolean $IsPublishAsTemplate) Set <p>Whether to synchronize publishing as an application template</p>
 * @method PortalShareConfig getPortalShareConfig() Obtain <p>portal configuration</p>
 * @method void setPortalShareConfig(PortalShareConfig $PortalShareConfig) Set <p>portal configuration</p>
 */
class CreateReleaseRequest extends AbstractModel
{
    /**
     * @var string <p>Application ID.</p>
     */
    public $AppId;

    /**
     * @var AppShareAccessControl <p>App sharing access control configuration</p>
     */
    public $AppShareAccessControl;

    /**
     * @var array <p>Channel ID list</p>
     */
    public $ChannelIdList;

    /**
     * @var CorpShareConfig <p>Business shared configuration</p>
     */
    public $CorpShareConfig;

    /**
     * @var string <p>Release description.</p>
     */
    public $Description;

    /**
     * @var boolean <p>Batch change the debug-only knowledge in the default knowledge base to "effective in both debug and release"</p>
     */
    public $IsDevToRelease;

    /**
     * @var boolean <p>Whether to synchronize publishing as an application template</p>
     */
    public $IsPublishAsTemplate;

    /**
     * @var PortalShareConfig <p>portal configuration</p>
     */
    public $PortalShareConfig;

    /**
     * @param string $AppId <p>Application ID.</p>
     * @param AppShareAccessControl $AppShareAccessControl <p>App sharing access control configuration</p>
     * @param array $ChannelIdList <p>Channel ID list</p>
     * @param CorpShareConfig $CorpShareConfig <p>Business shared configuration</p>
     * @param string $Description <p>Release description.</p>
     * @param boolean $IsDevToRelease <p>Batch change the debug-only knowledge in the default knowledge base to "effective in both debug and release"</p>
     * @param boolean $IsPublishAsTemplate <p>Whether to synchronize publishing as an application template</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("IsDevToRelease",$param) and $param["IsDevToRelease"] !== null) {
            $this->IsDevToRelease = $param["IsDevToRelease"];
        }

        if (array_key_exists("IsPublishAsTemplate",$param) and $param["IsPublishAsTemplate"] !== null) {
            $this->IsPublishAsTemplate = $param["IsPublishAsTemplate"];
        }

        if (array_key_exists("PortalShareConfig",$param) and $param["PortalShareConfig"] !== null) {
            $this->PortalShareConfig = new PortalShareConfig();
            $this->PortalShareConfig->deserialize($param["PortalShareConfig"]);
        }
    }
}
