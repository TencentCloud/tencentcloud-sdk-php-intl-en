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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyTableTags request structure.
 *
 * @method string getClusterId() Obtain The ID of the cluster where table tags need to be modified
 * @method void setClusterId(string $ClusterId) Set The ID of the cluster where table tags need to be modified
 * @method array getSelectedTables() Obtain The list of tables whose tags need to be modified
 * @method void setSelectedTables(array $SelectedTables) Set The list of tables whose tags need to be modified
 * @method array getReplaceTags() Obtain The list of tags to add or modify
 * @method void setReplaceTags(array $ReplaceTags) Set The list of tags to add or modify
 * @method array getDeleteTags() Obtain The list of tags to delete
 * @method void setDeleteTags(array $DeleteTags) Set The list of tags to delete
 */
class ModifyTableTagsRequest extends AbstractModel
{
    /**
     * @var string The ID of the cluster where table tags need to be modified
     */
    public $ClusterId;

    /**
     * @var array The list of tables whose tags need to be modified
     */
    public $SelectedTables;

    /**
     * @var array The list of tags to add or modify
     */
    public $ReplaceTags;

    /**
     * @var array The list of tags to delete
     */
    public $DeleteTags;

    /**
     * @param string $ClusterId The ID of the cluster where table tags need to be modified
     * @param array $SelectedTables The list of tables whose tags need to be modified
     * @param array $ReplaceTags The list of tags to add or modify
     * @param array $DeleteTags The list of tags to delete
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

        if (array_key_exists("SelectedTables",$param) and $param["SelectedTables"] !== null) {
            $this->SelectedTables = [];
            foreach ($param["SelectedTables"] as $key => $value){
                $obj = new SelectedTableInfoNew();
                $obj->deserialize($value);
                array_push($this->SelectedTables, $obj);
            }
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
