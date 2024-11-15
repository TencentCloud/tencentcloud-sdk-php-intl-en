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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyClusterTags request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method array getTags() Obtain Cluster Tag
 * @method void setTags(array $Tags) Set Cluster Tag
 * @method boolean getSyncSubresource() Obtain Whether to sync the subresource Tag within the cluster
 * @method void setSyncSubresource(boolean $SyncSubresource) Set Whether to sync the subresource Tag within the cluster
 */
class ModifyClusterTagsRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var array Cluster Tag
     */
    public $Tags;

    /**
     * @var boolean Whether to sync the subresource Tag within the cluster
     */
    public $SyncSubresource;

    /**
     * @param string $ClusterId Cluster ID
     * @param array $Tags Cluster Tag
     * @param boolean $SyncSubresource Whether to sync the subresource Tag within the cluster
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("SyncSubresource",$param) and $param["SyncSubresource"] !== null) {
            $this->SyncSubresource = $param["SyncSubresource"];
        }
    }
}
