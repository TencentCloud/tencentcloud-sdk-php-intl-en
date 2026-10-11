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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InstallSoftware request structure.
 *
 * @method string getInstanceId() Obtain <p>Cluster ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Cluster ID.</p>
 * @method array getSoftInfo() Obtain <p>Component version, for example, presto-0.161. You can view the components that can be installed on the current cluster via InstallSoftWareInfo.</p>
 * @method void setSoftInfo(array $SoftInfo) Set <p>Component version, for example, presto-0.161. You can view the components that can be installed on the current cluster via InstallSoftWareInfo.</p>
 * @method string getCdbAutoRenew() Obtain <p>If you use a monthly subscription cluster and need to purchase a CDB, determine whether to enable auto-renewal for the CDB. Default value: AUTO_RENEW. If auto-renewal is disabled for the newly-added CDB, fill in NOT_AUTO_RENEW.</p>
 * @method void setCdbAutoRenew(string $CdbAutoRenew) Set <p>If you use a monthly subscription cluster and need to purchase a CDB, determine whether to enable auto-renewal for the CDB. Default value: AUTO_RENEW. If auto-renewal is disabled for the newly-added CDB, fill in NOT_AUTO_RENEW.</p>
 * @method string getMetaType() Obtain <p>Hive shared metadata database type. Valid values:</p><li>EMR_NEW_META: created by the cluster by default</li><li>EMR_EXIT_METE: EMR-MetaDB specified by the cluster</li><li>USER_CUSTOM_META: custom MetaDB used by the cluster</li>
 * @method void setMetaType(string $MetaType) Set <p>Hive shared metadata database type. Valid values:</p><li>EMR_NEW_META: created by the cluster by default</li><li>EMR_EXIT_METE: EMR-MetaDB specified by the cluster</li><li>USER_CUSTOM_META: custom MetaDB used by the cluster</li>
 * @method string getUnifyMetaInstanceId() Obtain <p>EMR-MetaDB instance.</p>
 * @method void setUnifyMetaInstanceId(string $UnifyMetaInstanceId) Set <p>EMR-MetaDB instance.</p>
 * @method CustomMetaInfo getMetaDBInfo() Obtain <p>Custom MetaDB information.</p>
 * @method void setMetaDBInfo(CustomMetaInfo $MetaDBInfo) Set <p>Custom MetaDB information.</p>
 * @method array getExternalService() Obtain <p>Shared component information.</p>
 * @method void setExternalService(array $ExternalService) Set <p>Shared component information.</p>
 * @method array getTags() Obtain <p>Tag information.</p>
 * @method void setTags(array $Tags) Set <p>Tag information.</p>
 * @method array getCloudResources() Obtain <p>Pod specification information of the role.</p>
 * @method void setCloudResources(array $CloudResources) Set <p>Pod specification information of the role.</p>
 * @method array getServiceDeployInfoList() Obtain <p>Custom deployment information.</p>
 * @method void setServiceDeployInfoList(array $ServiceDeployInfoList) Set <p>Custom deployment information.</p>
 * @method string getDefaultMetaVersion() Obtain <p>Database version.</p>
 * @method void setDefaultMetaVersion(string $DefaultMetaVersion) Set <p>Database version.</p>
 * @method integer getNeedCdbAudit() Obtain <p>Whether to enable audit.</p>
 * @method void setNeedCdbAudit(integer $NeedCdbAudit) Set <p>Whether to enable audit.</p>
 * @method ContainerExtraConf getContainerExtraConf() Obtain <p>Additional container configuration.</p>
 * @method void setContainerExtraConf(ContainerExtraConf $ContainerExtraConf) Set <p>Additional container configuration.</p>
 * @method boolean getCheckServiceDeployInfo() Obtain <p>Whether to forcibly check the validity of custom components. Currently, it is available only for the Terraform side.</p>
 * @method void setCheckServiceDeployInfo(boolean $CheckServiceDeployInfo) Set <p>Whether to forcibly check the validity of custom components. Currently, it is available only for the Terraform side.</p>
 * @method array getMetaDBGroupInfo() Obtain <p>Custom MetaDB information.</p>
 * @method void setMetaDBGroupInfo(array $MetaDBGroupInfo) Set <p>Custom MetaDB information.</p>
 */
class InstallSoftwareRequest extends AbstractModel
{
    /**
     * @var string <p>Cluster ID.</p>
     */
    public $InstanceId;

    /**
     * @var array <p>Component version, for example, presto-0.161. You can view the components that can be installed on the current cluster via InstallSoftWareInfo.</p>
     */
    public $SoftInfo;

    /**
     * @var string <p>If you use a monthly subscription cluster and need to purchase a CDB, determine whether to enable auto-renewal for the CDB. Default value: AUTO_RENEW. If auto-renewal is disabled for the newly-added CDB, fill in NOT_AUTO_RENEW.</p>
     */
    public $CdbAutoRenew;

    /**
     * @var string <p>Hive shared metadata database type. Valid values:</p><li>EMR_NEW_META: created by the cluster by default</li><li>EMR_EXIT_METE: EMR-MetaDB specified by the cluster</li><li>USER_CUSTOM_META: custom MetaDB used by the cluster</li>
     */
    public $MetaType;

    /**
     * @var string <p>EMR-MetaDB instance.</p>
     */
    public $UnifyMetaInstanceId;

    /**
     * @var CustomMetaInfo <p>Custom MetaDB information.</p>
     */
    public $MetaDBInfo;

    /**
     * @var array <p>Shared component information.</p>
     */
    public $ExternalService;

    /**
     * @var array <p>Tag information.</p>
     */
    public $Tags;

    /**
     * @var array <p>Pod specification information of the role.</p>
     */
    public $CloudResources;

    /**
     * @var array <p>Custom deployment information.</p>
     */
    public $ServiceDeployInfoList;

    /**
     * @var string <p>Database version.</p>
     */
    public $DefaultMetaVersion;

    /**
     * @var integer <p>Whether to enable audit.</p>
     */
    public $NeedCdbAudit;

    /**
     * @var ContainerExtraConf <p>Additional container configuration.</p>
     */
    public $ContainerExtraConf;

    /**
     * @var boolean <p>Whether to forcibly check the validity of custom components. Currently, it is available only for the Terraform side.</p>
     */
    public $CheckServiceDeployInfo;

    /**
     * @var array <p>Custom MetaDB information.</p>
     */
    public $MetaDBGroupInfo;

    /**
     * @param string $InstanceId <p>Cluster ID.</p>
     * @param array $SoftInfo <p>Component version, for example, presto-0.161. You can view the components that can be installed on the current cluster via InstallSoftWareInfo.</p>
     * @param string $CdbAutoRenew <p>If you use a monthly subscription cluster and need to purchase a CDB, determine whether to enable auto-renewal for the CDB. Default value: AUTO_RENEW. If auto-renewal is disabled for the newly-added CDB, fill in NOT_AUTO_RENEW.</p>
     * @param string $MetaType <p>Hive shared metadata database type. Valid values:</p><li>EMR_NEW_META: created by the cluster by default</li><li>EMR_EXIT_METE: EMR-MetaDB specified by the cluster</li><li>USER_CUSTOM_META: custom MetaDB used by the cluster</li>
     * @param string $UnifyMetaInstanceId <p>EMR-MetaDB instance.</p>
     * @param CustomMetaInfo $MetaDBInfo <p>Custom MetaDB information.</p>
     * @param array $ExternalService <p>Shared component information.</p>
     * @param array $Tags <p>Tag information.</p>
     * @param array $CloudResources <p>Pod specification information of the role.</p>
     * @param array $ServiceDeployInfoList <p>Custom deployment information.</p>
     * @param string $DefaultMetaVersion <p>Database version.</p>
     * @param integer $NeedCdbAudit <p>Whether to enable audit.</p>
     * @param ContainerExtraConf $ContainerExtraConf <p>Additional container configuration.</p>
     * @param boolean $CheckServiceDeployInfo <p>Whether to forcibly check the validity of custom components. Currently, it is available only for the Terraform side.</p>
     * @param array $MetaDBGroupInfo <p>Custom MetaDB information.</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("SoftInfo",$param) and $param["SoftInfo"] !== null) {
            $this->SoftInfo = $param["SoftInfo"];
        }

        if (array_key_exists("CdbAutoRenew",$param) and $param["CdbAutoRenew"] !== null) {
            $this->CdbAutoRenew = $param["CdbAutoRenew"];
        }

        if (array_key_exists("MetaType",$param) and $param["MetaType"] !== null) {
            $this->MetaType = $param["MetaType"];
        }

        if (array_key_exists("UnifyMetaInstanceId",$param) and $param["UnifyMetaInstanceId"] !== null) {
            $this->UnifyMetaInstanceId = $param["UnifyMetaInstanceId"];
        }

        if (array_key_exists("MetaDBInfo",$param) and $param["MetaDBInfo"] !== null) {
            $this->MetaDBInfo = new CustomMetaInfo();
            $this->MetaDBInfo->deserialize($param["MetaDBInfo"]);
        }

        if (array_key_exists("ExternalService",$param) and $param["ExternalService"] !== null) {
            $this->ExternalService = [];
            foreach ($param["ExternalService"] as $key => $value){
                $obj = new ExternalService();
                $obj->deserialize($value);
                array_push($this->ExternalService, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("CloudResources",$param) and $param["CloudResources"] !== null) {
            $this->CloudResources = [];
            foreach ($param["CloudResources"] as $key => $value){
                $obj = new CloudResource();
                $obj->deserialize($value);
                array_push($this->CloudResources, $obj);
            }
        }

        if (array_key_exists("ServiceDeployInfoList",$param) and $param["ServiceDeployInfoList"] !== null) {
            $this->ServiceDeployInfoList = [];
            foreach ($param["ServiceDeployInfoList"] as $key => $value){
                $obj = new ServiceDeployInfo();
                $obj->deserialize($value);
                array_push($this->ServiceDeployInfoList, $obj);
            }
        }

        if (array_key_exists("DefaultMetaVersion",$param) and $param["DefaultMetaVersion"] !== null) {
            $this->DefaultMetaVersion = $param["DefaultMetaVersion"];
        }

        if (array_key_exists("NeedCdbAudit",$param) and $param["NeedCdbAudit"] !== null) {
            $this->NeedCdbAudit = $param["NeedCdbAudit"];
        }

        if (array_key_exists("ContainerExtraConf",$param) and $param["ContainerExtraConf"] !== null) {
            $this->ContainerExtraConf = new ContainerExtraConf();
            $this->ContainerExtraConf->deserialize($param["ContainerExtraConf"]);
        }

        if (array_key_exists("CheckServiceDeployInfo",$param) and $param["CheckServiceDeployInfo"] !== null) {
            $this->CheckServiceDeployInfo = $param["CheckServiceDeployInfo"];
        }

        if (array_key_exists("MetaDBGroupInfo",$param) and $param["MetaDBGroupInfo"] !== null) {
            $this->MetaDBGroupInfo = [];
            foreach ($param["MetaDBGroupInfo"] as $key => $value){
                $obj = new CustomMetaDBInfo();
                $obj->deserialize($value);
                array_push($this->MetaDBGroupInfo, $obj);
            }
        }
    }
}
