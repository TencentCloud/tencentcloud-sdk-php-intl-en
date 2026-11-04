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
 * Complete information of the application
 *
 * @method AppAuxiliaryInfo getAuxiliaryInfo() Obtain <p>Auxiliary information (sub-status/approval/appeal/search for resource/special status)</p>
 * @method void setAuxiliaryInfo(AppAuxiliaryInfo $AuxiliaryInfo) Set <p>Auxiliary information (sub-status/approval/appeal/search for resource/special status)</p>
 * @method AppConfig getConfig() Obtain <p>Configuration.</p>
 * @method void setConfig(AppConfig $Config) Set <p>Configuration.</p>
 * @method AppMetadata getMetadata() Obtain <p>Metadata</p>
 * @method void setMetadata(AppMetadata $Metadata) Set <p>Metadata</p>
 * @method AppSecretInfo getSecretInfo() Obtain <p>Application key information</p>
 * @method void setSecretInfo(AppSecretInfo $SecretInfo) Set <p>Application key information</p>
 * @method AppShareURLInfo getShareUrlInfo() Obtain <p>Sharing link information (including access control)</p>
 * @method void setShareUrlInfo(AppShareURLInfo $ShareUrlInfo) Set <p>Sharing link information (including access control)</p>
 * @method AppStatusInfo getStatus() Obtain <p>Status.</p>
 * @method void setStatus(AppStatusInfo $Status) Set <p>Status.</p>
 * @method CorpShareConfig getCorpShareConfig() Obtain <p>Business shared configuration</p>
 * @method void setCorpShareConfig(CorpShareConfig $CorpShareConfig) Set <p>Business shared configuration</p>
 * @method array getSharedKbList() Obtain <p>List of shared knowledge bases referenced by the application</p>
 * @method void setSharedKbList(array $SharedKbList) Set <p>List of shared knowledge bases referenced by the application</p>
 * @method PortalShareConfig getPortalShareConfig() Obtain <p>portal shared configuration</p>
 * @method void setPortalShareConfig(PortalShareConfig $PortalShareConfig) Set <p>portal shared configuration</p>
 * @method array getFileVolumeMountList() Obtain <p>Application-mounted cloud disk</p>
 * @method void setFileVolumeMountList(array $FileVolumeMountList) Set <p>Application-mounted cloud disk</p>
 */
class App extends AbstractModel
{
    /**
     * @var AppAuxiliaryInfo <p>Auxiliary information (sub-status/approval/appeal/search for resource/special status)</p>
     */
    public $AuxiliaryInfo;

    /**
     * @var AppConfig <p>Configuration.</p>
     */
    public $Config;

    /**
     * @var AppMetadata <p>Metadata</p>
     */
    public $Metadata;

    /**
     * @var AppSecretInfo <p>Application key information</p>
     */
    public $SecretInfo;

    /**
     * @var AppShareURLInfo <p>Sharing link information (including access control)</p>
     */
    public $ShareUrlInfo;

    /**
     * @var AppStatusInfo <p>Status.</p>
     */
    public $Status;

    /**
     * @var CorpShareConfig <p>Business shared configuration</p>
     */
    public $CorpShareConfig;

    /**
     * @var array <p>List of shared knowledge bases referenced by the application</p>
     */
    public $SharedKbList;

    /**
     * @var PortalShareConfig <p>portal shared configuration</p>
     */
    public $PortalShareConfig;

    /**
     * @var array <p>Application-mounted cloud disk</p>
     */
    public $FileVolumeMountList;

    /**
     * @param AppAuxiliaryInfo $AuxiliaryInfo <p>Auxiliary information (sub-status/approval/appeal/search for resource/special status)</p>
     * @param AppConfig $Config <p>Configuration.</p>
     * @param AppMetadata $Metadata <p>Metadata</p>
     * @param AppSecretInfo $SecretInfo <p>Application key information</p>
     * @param AppShareURLInfo $ShareUrlInfo <p>Sharing link information (including access control)</p>
     * @param AppStatusInfo $Status <p>Status.</p>
     * @param CorpShareConfig $CorpShareConfig <p>Business shared configuration</p>
     * @param array $SharedKbList <p>List of shared knowledge bases referenced by the application</p>
     * @param PortalShareConfig $PortalShareConfig <p>portal shared configuration</p>
     * @param array $FileVolumeMountList <p>Application-mounted cloud disk</p>
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
        if (array_key_exists("AuxiliaryInfo",$param) and $param["AuxiliaryInfo"] !== null) {
            $this->AuxiliaryInfo = new AppAuxiliaryInfo();
            $this->AuxiliaryInfo->deserialize($param["AuxiliaryInfo"]);
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new AppConfig();
            $this->Config->deserialize($param["Config"]);
        }

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = new AppMetadata();
            $this->Metadata->deserialize($param["Metadata"]);
        }

        if (array_key_exists("SecretInfo",$param) and $param["SecretInfo"] !== null) {
            $this->SecretInfo = new AppSecretInfo();
            $this->SecretInfo->deserialize($param["SecretInfo"]);
        }

        if (array_key_exists("ShareUrlInfo",$param) and $param["ShareUrlInfo"] !== null) {
            $this->ShareUrlInfo = new AppShareURLInfo();
            $this->ShareUrlInfo->deserialize($param["ShareUrlInfo"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = new AppStatusInfo();
            $this->Status->deserialize($param["Status"]);
        }

        if (array_key_exists("CorpShareConfig",$param) and $param["CorpShareConfig"] !== null) {
            $this->CorpShareConfig = new CorpShareConfig();
            $this->CorpShareConfig->deserialize($param["CorpShareConfig"]);
        }

        if (array_key_exists("SharedKbList",$param) and $param["SharedKbList"] !== null) {
            $this->SharedKbList = [];
            foreach ($param["SharedKbList"] as $key => $value){
                $obj = new AppSharedKbInfo();
                $obj->deserialize($value);
                array_push($this->SharedKbList, $obj);
            }
        }

        if (array_key_exists("PortalShareConfig",$param) and $param["PortalShareConfig"] !== null) {
            $this->PortalShareConfig = new PortalShareConfig();
            $this->PortalShareConfig->deserialize($param["PortalShareConfig"]);
        }

        if (array_key_exists("FileVolumeMountList",$param) and $param["FileVolumeMountList"] !== null) {
            $this->FileVolumeMountList = [];
            foreach ($param["FileVolumeMountList"] as $key => $value){
                $obj = new FileVolumeMount();
                $obj->deserialize($value);
                array_push($this->FileVolumeMountList, $obj);
            }
        }
    }
}
