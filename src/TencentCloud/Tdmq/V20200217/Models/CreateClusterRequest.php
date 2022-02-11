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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCluster request structure.
 *
 * @method string getClusterName() Obtain Cluster name, which can contain up to 16 letters, digits, hyphens, and underscores.
 * @method void setClusterName(string $ClusterName) Set Cluster name, which can contain up to 16 letters, digits, hyphens, and underscores.
 * @method integer getBindClusterId() Obtain ID of your dedicated physical cluster. If it is not passed in, cluster resources will be created in a public cluster by default.
 * @method void setBindClusterId(integer $BindClusterId) Set ID of your dedicated physical cluster. If it is not passed in, cluster resources will be created in a public cluster by default.
 * @method string getRemark() Obtain Remarks (up to 128 characters).
 * @method void setRemark(string $Remark) Set Remarks (up to 128 characters).
 * @method array getTags() Obtain Cluster tag list (deprecated).
 * @method void setTags(array $Tags) Set Cluster tag list (deprecated).
 * @method boolean getPublicAccessEnabled() Obtain Whether to enable public network access. If this parameter is left empty, the feature will be enabled by default
 * @method void setPublicAccessEnabled(boolean $PublicAccessEnabled) Set Whether to enable public network access. If this parameter is left empty, the feature will be enabled by default
 */
class CreateClusterRequest extends AbstractModel
{
    /**
     * @var string Cluster name, which can contain up to 16 letters, digits, hyphens, and underscores.
     */
    public $ClusterName;

    /**
     * @var integer ID of your dedicated physical cluster. If it is not passed in, cluster resources will be created in a public cluster by default.
     */
    public $BindClusterId;

    /**
     * @var string Remarks (up to 128 characters).
     */
    public $Remark;

    /**
     * @var array Cluster tag list (deprecated).
     */
    public $Tags;

    /**
     * @var boolean Whether to enable public network access. If this parameter is left empty, the feature will be enabled by default
     */
    public $PublicAccessEnabled;

    /**
     * @param string $ClusterName Cluster name, which can contain up to 16 letters, digits, hyphens, and underscores.
     * @param integer $BindClusterId ID of your dedicated physical cluster. If it is not passed in, cluster resources will be created in a public cluster by default.
     * @param string $Remark Remarks (up to 128 characters).
     * @param array $Tags Cluster tag list (deprecated).
     * @param boolean $PublicAccessEnabled Whether to enable public network access. If this parameter is left empty, the feature will be enabled by default
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
        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("BindClusterId",$param) and $param["BindClusterId"] !== null) {
            $this->BindClusterId = $param["BindClusterId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("PublicAccessEnabled",$param) and $param["PublicAccessEnabled"] !== null) {
            $this->PublicAccessEnabled = $param["PublicAccessEnabled"];
        }
    }
}
