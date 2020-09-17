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
 * CreateTables request structure.
 *
 * @method string getClusterId() Obtain ID of the cluster where to create a table
 * @method void setClusterId(string $ClusterId) Set ID of the cluster where to create a table
 * @method array getIdlFiles() Obtain Table creation IDL file list selected by user
 * @method void setIdlFiles(array $IdlFiles) Set Table creation IDL file list selected by user
 * @method array getSelectedTables() Obtain Information list of tables to be created
 * @method void setSelectedTables(array $SelectedTables) Set Information list of tables to be created
 * @method array getResourceTags() Obtain Table tag list
 * @method void setResourceTags(array $ResourceTags) Set Table tag list
 */
class CreateTablesRequest extends AbstractModel
{
    /**
     * @var string ID of the cluster where to create a table
     */
    public $ClusterId;

    /**
     * @var array Table creation IDL file list selected by user
     */
    public $IdlFiles;

    /**
     * @var array Information list of tables to be created
     */
    public $SelectedTables;

    /**
     * @var array Table tag list
     */
    public $ResourceTags;

    /**
     * @param string $ClusterId ID of the cluster where to create a table
     * @param array $IdlFiles Table creation IDL file list selected by user
     * @param array $SelectedTables Information list of tables to be created
     * @param array $ResourceTags Table tag list
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

        if (array_key_exists("IdlFiles",$param) and $param["IdlFiles"] !== null) {
            $this->IdlFiles = [];
            foreach ($param["IdlFiles"] as $key => $value){
                $obj = new IdlFileInfo();
                $obj->deserialize($value);
                array_push($this->IdlFiles, $obj);
            }
        }

        if (array_key_exists("SelectedTables",$param) and $param["SelectedTables"] !== null) {
            $this->SelectedTables = [];
            foreach ($param["SelectedTables"] as $key => $value){
                $obj = new SelectedTableInfoNew();
                $obj->deserialize($value);
                array_push($this->SelectedTables, $obj);
            }
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new TagInfoUnit();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }
    }
}
