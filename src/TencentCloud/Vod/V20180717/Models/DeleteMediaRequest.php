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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteMedia request structure.
 *
 * @method string getFileId() Obtain 
 * @method void setFileId(string $FileId) Set 
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method array getDeleteParts() Obtain 
 * @method void setDeleteParts(array $DeleteParts) Set 
 */
class DeleteMediaRequest extends AbstractModel
{
    /**
     * @var string 
     */
    public $FileId;

    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @var array 
     */
    public $DeleteParts;

    /**
     * @param string $FileId 
     * @param integer $SubAppId 
     * @param array $DeleteParts 
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("DeleteParts",$param) and $param["DeleteParts"] !== null) {
            $this->DeleteParts = [];
            foreach ($param["DeleteParts"] as $key => $value){
                $obj = new MediaDeleteItem();
                $obj->deserialize($value);
                array_push($this->DeleteParts, $obj);
            }
        }
    }
}
