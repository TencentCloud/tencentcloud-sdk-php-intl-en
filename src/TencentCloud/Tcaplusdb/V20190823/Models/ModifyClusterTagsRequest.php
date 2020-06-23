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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyClusterTags request structure.
 *
 * @method string getClusterId() Obtain The ID of the cluster whose tags need to be modified
 * @method void setClusterId(string $ClusterId) Set The ID of the cluster whose tags need to be modified
 * @method array getReplaceTags() Obtain The list of tags to add or modify
 * @method void setReplaceTags(array $ReplaceTags) Set The list of tags to add or modify
 * @method array getDeleteTags() Obtain Tags to delete
 * @method void setDeleteTags(array $DeleteTags) Set Tags to delete
 */
class ModifyClusterTagsRequest extends AbstractModel
{
    /**
     * @var string The ID of the cluster whose tags need to be modified
     */
    public $ClusterId;

    /**
     * @var array The list of tags to add or modify
     */
    public $ReplaceTags;

    /**
     * @var array Tags to delete
     */
    public $DeleteTags;

    /**
     * @param string $ClusterId The ID of the cluster whose tags need to be modified
     * @param array $ReplaceTags The list of tags to add or modify
     * @param array $DeleteTags Tags to delete
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

        if (array_key_exists("ReplaceTags",$param) and $param["ReplaceTags"] !== null) {
            $this->ReplaceTags = [];
            foreach ($param["ReplaceTags"] as $key => $value){
                $obj = new TagInfoUnit();
                $obj->deserialize($value);
                array_push($this->ReplaceTags, $obj);
            }
        }

        if (array_key_exists("DeleteTags",$param) and $param["DeleteTags"] !== null) {
            $this->DeleteTags = [];
            foreach ($param["DeleteTags"] as $key => $value){
                $obj = new TagInfoUnit();
                $obj->deserialize($value);
                array_push($this->DeleteTags, $obj);
            }
        }
    }
}
