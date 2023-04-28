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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Basic information of the cluster associated with a Tencent Cloud Observability Platform (TCOP)-integrated TMP instance.
 *
 * @method string getRegion() Obtain Cluster ID
 * @method void setRegion(string $Region) Set Cluster ID
 * @method string getClusterType() Obtain Cluster type
 * @method void setClusterType(string $ClusterType) Set Cluster type
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method boolean getEnableExternal() Obtain Whether to enable public network CLB
 * @method void setEnableExternal(boolean $EnableExternal) Set Whether to enable public network CLB
 * @method PrometheusClusterAgentPodConfig getInClusterPodConfig() Obtain Pod configurations of components deployed in the cluster
 * @method void setInClusterPodConfig(PrometheusClusterAgentPodConfig $InClusterPodConfig) Set Pod configurations of components deployed in the cluster
 * @method array getExternalLabels() Obtain External labels, which will be attached to all metrics collected by this cluster
 * @method void setExternalLabels(array $ExternalLabels) Set External labels, which will be attached to all metrics collected by this cluster
 * @method boolean getNotInstallBasicScrape() Obtain Whether to install the default collection configuration.
 * @method void setNotInstallBasicScrape(boolean $NotInstallBasicScrape) Set Whether to install the default collection configuration.
 * @method boolean getNotScrape() Obtain Whether to collect metrics (`true`: Drop all metrics; `false`: Collect default metrics)
 * @method void setNotScrape(boolean $NotScrape) Set Whether to collect metrics (`true`: Drop all metrics; `false`: Collect default metrics)
 * @method boolean getOpenDefaultRecord() Obtain Whether to enable the default recording rule
 * @method void setOpenDefaultRecord(boolean $OpenDefaultRecord) Set Whether to enable the default recording rule
 */
class PrometheusClusterAgentBasic extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $Region;

    /**
     * @var string Cluster type
     */
    public $ClusterType;

    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var boolean Whether to enable public network CLB
     */
    public $EnableExternal;

    /**
     * @var PrometheusClusterAgentPodConfig Pod configurations of components deployed in the cluster
     */
    public $InClusterPodConfig;

    /**
     * @var array External labels, which will be attached to all metrics collected by this cluster
     */
    public $ExternalLabels;

    /**
     * @var boolean Whether to install the default collection configuration.
     */
    public $NotInstallBasicScrape;

    /**
     * @var boolean Whether to collect metrics (`true`: Drop all metrics; `false`: Collect default metrics)
     */
    public $NotScrape;

    /**
     * @var boolean Whether to enable the default recording rule
     */
    public $OpenDefaultRecord;

    /**
     * @param string $Region Cluster ID
     * @param string $ClusterType Cluster type
     * @param string $ClusterId Cluster ID
     * @param boolean $EnableExternal Whether to enable public network CLB
     * @param PrometheusClusterAgentPodConfig $InClusterPodConfig Pod configurations of components deployed in the cluster
     * @param array $ExternalLabels External labels, which will be attached to all metrics collected by this cluster
     * @param boolean $NotInstallBasicScrape Whether to install the default collection configuration.
     * @param boolean $NotScrape Whether to collect metrics (`true`: Drop all metrics; `false`: Collect default metrics)
     * @param boolean $OpenDefaultRecord Whether to enable the default recording rule
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("EnableExternal",$param) and $param["EnableExternal"] !== null) {
            $this->EnableExternal = $param["EnableExternal"];
        }

        if (array_key_exists("InClusterPodConfig",$param) and $param["InClusterPodConfig"] !== null) {
            $this->InClusterPodConfig = new PrometheusClusterAgentPodConfig();
            $this->InClusterPodConfig->deserialize($param["InClusterPodConfig"]);
        }

        if (array_key_exists("ExternalLabels",$param) and $param["ExternalLabels"] !== null) {
            $this->ExternalLabels = [];
            foreach ($param["ExternalLabels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->ExternalLabels, $obj);
            }
        }

        if (array_key_exists("NotInstallBasicScrape",$param) and $param["NotInstallBasicScrape"] !== null) {
            $this->NotInstallBasicScrape = $param["NotInstallBasicScrape"];
        }

        if (array_key_exists("NotScrape",$param) and $param["NotScrape"] !== null) {
            $this->NotScrape = $param["NotScrape"];
        }

        if (array_key_exists("OpenDefaultRecord",$param) and $param["OpenDefaultRecord"] !== null) {
            $this->OpenDefaultRecord = $param["OpenDefaultRecord"];
        }
    }
}
