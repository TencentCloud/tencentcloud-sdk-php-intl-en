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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateMetricConfig request structure.
 *
 * @method string getTopicId() Obtain Metric log topic id.
- Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1). Note that BizType 0: log topic (default value), 1: metric topic.
- Obtain the log topic Id through [Create Log Topic](https://www.tencentcloud.com/document/product/614/56456?from_cn_redirect=1). Note that BizType 0: log topic (default value), 1: metric topic.
 * @method void setTopicId(string $TopicId) Set Metric log topic id.
- Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1). Note that BizType 0: log topic (default value), 1: metric topic.
- Obtain the log topic Id through [Create Log Topic](https://www.tencentcloud.com/document/product/614/56456?from_cn_redirect=1). Note that BizType 0: log topic (default value), 1: metric topic.
 * @method integer getSource() Obtain Collection configuration source. Support: `0`, `1`.
-0: Self-build k8s
- 1:TKE
 * @method void setSource(integer $Source) Set Collection configuration source. Support: `0`, `1`.
-0: Self-build k8s
- 1:TKE
 * @method array getGroupIds() Obtain Machine group ID.
 * @method void setGroupIds(array $GroupIds) Set Machine group ID.
 * @method integer getType() Obtain Monitoring type. Supported values: `0`, `1`. Cannot be modified.
-0: Basic monitoring
-Custom monitoring
 * @method void setType(integer $Type) Set Monitoring type. Supported values: `0`, `1`. Cannot be modified.
-0: Basic monitoring
-Custom monitoring
 * @method integer getFlag() Obtain Collection configuration method. Supports `0`, `1`. Cannot be modified.
-0: Ordinary setting method. The Type field is only for `1`.
-YAML import method. Type can be `0` or `1`.
 * @method void setFlag(integer $Flag) Set Collection configuration method. Supports `0`, `1`. Cannot be modified.
-0: Ordinary setting method. The Type field is only for `1`.
-YAML import method. Type can be `0` or `1`.
 * @method string getName() Obtain Name: Length not exceeding 253 characters, check format `[a-z0-9]([-a-z0-9]*[a-z0-9])?(\.[a-z0-9]([-a-z0-9]*[a-z0-9])?)*`.
 * @method void setName(string $Name) Set Name: Length not exceeding 253 characters, check format `[a-z0-9]([-a-z0-9]*[a-z0-9])?(\.[a-z0-9]([-a-z0-9]*[a-z0-9])?)*`.
 * @method MetricSpec getSpec() Obtain Collection object. This parameter is valid only when Flag is 0.
 * @method void setSpec(MetricSpec $Spec) Set Collection object. This parameter is valid only when Flag is 0.
 * @method array getMetricRelabels() Obtain Label processing. This parameter is valid only when Flag is 0.
 * @method void setMetricRelabels(array $MetricRelabels) Set Label processing. This parameter is valid only when Flag is 0.
 * @method MetricConfigLabel getMetricLabel() Obtain Custom metadata. This parameter is valid only when Flag is 0.
 * @method void setMetricLabel(MetricConfigLabel $MetricLabel) Set Custom metadata. This parameter is valid only when Flag is 0.
 * @method string getScheme() Obtain Communication protocol. Valid values: HTTP and HTTPS. This parameter is valid only when Flag is 0.
 * @method void setScheme(string $Scheme) Set Communication protocol. Valid values: HTTP and HTTPS. This parameter is valid only when Flag is 0.
 * @method string getScrapeInterval() Obtain Collection frequency. This parameter is valid only when Flag is 0.
-Check format: `^(((\d+)y)?((\d+)w)?((\d+)d)?((\d+)h)?((\d+)m)?((\d+)s)?((\d+)ms)?|0)$`
-Default: 60s
 * @method void setScrapeInterval(string $ScrapeInterval) Set Collection frequency. This parameter is valid only when Flag is 0.
-Check format: `^(((\d+)y)?((\d+)w)?((\d+)d)?((\d+)h)?((\d+)m)?((\d+)s)?((\d+)ms)?|0)$`
-Default: 60s
 * @method string getScrapeTimeout() Obtain Collection timeout. This parameter is valid only when Flag is 0.
-Check format: `^(((\d+)y)?((\d+)w)?((\d+)d)?((\d+)h)?((\d+)m)?((\d+)s)?((\d+)ms)?|0)$`
-Default: 30s
 * @method void setScrapeTimeout(string $ScrapeTimeout) Set Collection timeout. This parameter is valid only when Flag is 0.
-Check format: `^(((\d+)y)?((\d+)w)?((\d+)d)?((\d+)h)?((\d+)m)?((\d+)s)?((\d+)ms)?|0)$`
-Default: 30s
 * @method boolean getHonorLabels() Obtain How to handle tag conflicts. This parameter is valid only when Flag=0 and supports `true` and `false`.
-`false`: Rename conflicting tags in configuration data
-`true`: Ignore server-side tag conflicts
 * @method void setHonorLabels(boolean $HonorLabels) Set How to handle tag conflicts. This parameter is valid only when Flag=0 and supports `true` and `false`.
-`false`: Rename conflicting tags in configuration data
-`true`: Ignore server-side tag conflicts
 * @method MetricYamlSpec getYamlSpec() Obtain Collection configuration, which is a string in YAML format. It is required when Flag is 1.
 * @method void setYamlSpec(MetricYamlSpec $YamlSpec) Set Collection configuration, which is a string in YAML format. It is required when Flag is 1.
 */
class CreateMetricConfigRequest extends AbstractModel
{
    /**
     * @var string Metric log topic id.
- Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1). Note that BizType 0: log topic (default value), 1: metric topic.
- Obtain the log topic Id through [Create Log Topic](https://www.tencentcloud.com/document/product/614/56456?from_cn_redirect=1). Note that BizType 0: log topic (default value), 1: metric topic.
     */
    public $TopicId;

    /**
     * @var integer Collection configuration source. Support: `0`, `1`.
-0: Self-build k8s
- 1:TKE
     */
    public $Source;

    /**
     * @var array Machine group ID.
     */
    public $GroupIds;

    /**
     * @var integer Monitoring type. Supported values: `0`, `1`. Cannot be modified.
-0: Basic monitoring
-Custom monitoring
     */
    public $Type;

    /**
     * @var integer Collection configuration method. Supports `0`, `1`. Cannot be modified.
-0: Ordinary setting method. The Type field is only for `1`.
-YAML import method. Type can be `0` or `1`.
     */
    public $Flag;

    /**
     * @var string Name: Length not exceeding 253 characters, check format `[a-z0-9]([-a-z0-9]*[a-z0-9])?(\.[a-z0-9]([-a-z0-9]*[a-z0-9])?)*`.
     */
    public $Name;

    /**
     * @var MetricSpec Collection object. This parameter is valid only when Flag is 0.
     */
    public $Spec;

    /**
     * @var array Label processing. This parameter is valid only when Flag is 0.
     */
    public $MetricRelabels;

    /**
     * @var MetricConfigLabel Custom metadata. This parameter is valid only when Flag is 0.
     */
    public $MetricLabel;

    /**
     * @var string Communication protocol. Valid values: HTTP and HTTPS. This parameter is valid only when Flag is 0.
     */
    public $Scheme;

    /**
     * @var string Collection frequency. This parameter is valid only when Flag is 0.
-Check format: `^(((\d+)y)?((\d+)w)?((\d+)d)?((\d+)h)?((\d+)m)?((\d+)s)?((\d+)ms)?|0)$`
-Default: 60s
     */
    public $ScrapeInterval;

    /**
     * @var string Collection timeout. This parameter is valid only when Flag is 0.
-Check format: `^(((\d+)y)?((\d+)w)?((\d+)d)?((\d+)h)?((\d+)m)?((\d+)s)?((\d+)ms)?|0)$`
-Default: 30s
     */
    public $ScrapeTimeout;

    /**
     * @var boolean How to handle tag conflicts. This parameter is valid only when Flag=0 and supports `true` and `false`.
-`false`: Rename conflicting tags in configuration data
-`true`: Ignore server-side tag conflicts
     */
    public $HonorLabels;

    /**
     * @var MetricYamlSpec Collection configuration, which is a string in YAML format. It is required when Flag is 1.
     */
    public $YamlSpec;

    /**
     * @param string $TopicId Metric log topic id.
- Obtain the log topic Id through [Get Log Topic List](https://www.tencentcloud.com/document/product/614/56454?from_cn_redirect=1). Note that BizType 0: log topic (default value), 1: metric topic.
- Obtain the log topic Id through [Create Log Topic](https://www.tencentcloud.com/document/product/614/56456?from_cn_redirect=1). Note that BizType 0: log topic (default value), 1: metric topic.
     * @param integer $Source Collection configuration source. Support: `0`, `1`.
-0: Self-build k8s
- 1:TKE
     * @param array $GroupIds Machine group ID.
     * @param integer $Type Monitoring type. Supported values: `0`, `1`. Cannot be modified.
-0: Basic monitoring
-Custom monitoring
     * @param integer $Flag Collection configuration method. Supports `0`, `1`. Cannot be modified.
-0: Ordinary setting method. The Type field is only for `1`.
-YAML import method. Type can be `0` or `1`.
     * @param string $Name Name: Length not exceeding 253 characters, check format `[a-z0-9]([-a-z0-9]*[a-z0-9])?(\.[a-z0-9]([-a-z0-9]*[a-z0-9])?)*`.
     * @param MetricSpec $Spec Collection object. This parameter is valid only when Flag is 0.
     * @param array $MetricRelabels Label processing. This parameter is valid only when Flag is 0.
     * @param MetricConfigLabel $MetricLabel Custom metadata. This parameter is valid only when Flag is 0.
     * @param string $Scheme Communication protocol. Valid values: HTTP and HTTPS. This parameter is valid only when Flag is 0.
     * @param string $ScrapeInterval Collection frequency. This parameter is valid only when Flag is 0.
-Check format: `^(((\d+)y)?((\d+)w)?((\d+)d)?((\d+)h)?((\d+)m)?((\d+)s)?((\d+)ms)?|0)$`
-Default: 60s
     * @param string $ScrapeTimeout Collection timeout. This parameter is valid only when Flag is 0.
-Check format: `^(((\d+)y)?((\d+)w)?((\d+)d)?((\d+)h)?((\d+)m)?((\d+)s)?((\d+)ms)?|0)$`
-Default: 30s
     * @param boolean $HonorLabels How to handle tag conflicts. This parameter is valid only when Flag=0 and supports `true` and `false`.
-`false`: Rename conflicting tags in configuration data
-`true`: Ignore server-side tag conflicts
     * @param MetricYamlSpec $YamlSpec Collection configuration, which is a string in YAML format. It is required when Flag is 1.
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
        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("GroupIds",$param) and $param["GroupIds"] !== null) {
            $this->GroupIds = $param["GroupIds"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Flag",$param) and $param["Flag"] !== null) {
            $this->Flag = $param["Flag"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = new MetricSpec();
            $this->Spec->deserialize($param["Spec"]);
        }

        if (array_key_exists("MetricRelabels",$param) and $param["MetricRelabels"] !== null) {
            $this->MetricRelabels = [];
            foreach ($param["MetricRelabels"] as $key => $value){
                $obj = new Relabeling();
                $obj->deserialize($value);
                array_push($this->MetricRelabels, $obj);
            }
        }

        if (array_key_exists("MetricLabel",$param) and $param["MetricLabel"] !== null) {
            $this->MetricLabel = new MetricConfigLabel();
            $this->MetricLabel->deserialize($param["MetricLabel"]);
        }

        if (array_key_exists("Scheme",$param) and $param["Scheme"] !== null) {
            $this->Scheme = $param["Scheme"];
        }

        if (array_key_exists("ScrapeInterval",$param) and $param["ScrapeInterval"] !== null) {
            $this->ScrapeInterval = $param["ScrapeInterval"];
        }

        if (array_key_exists("ScrapeTimeout",$param) and $param["ScrapeTimeout"] !== null) {
            $this->ScrapeTimeout = $param["ScrapeTimeout"];
        }

        if (array_key_exists("HonorLabels",$param) and $param["HonorLabels"] !== null) {
            $this->HonorLabels = $param["HonorLabels"];
        }

        if (array_key_exists("YamlSpec",$param) and $param["YamlSpec"] !== null) {
            $this->YamlSpec = new MetricYamlSpec();
            $this->YamlSpec->deserialize($param["YamlSpec"]);
        }
    }
}
