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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getBucket() Obtain 
 * @method void setBucket(string $Bucket) Set 
 * @method string getRegion() Obtain 
 * @method void setRegion(string $Region) Set 
 * @method string getObject() Obtain 
 * @method void setObject(string $Object) Set 
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method integer getVodBasic() Obtain 
 * @method void setVodBasic(integer $VodBasic) Set 
 * @method string getFileId() Obtain 
 * @method void setFileId(string $FileId) Set 
 */
class VODInputInfo extends AbstractModel
{
    /**
     * @var string 
     */
    public $Bucket;

    /**
     * @var string 
     */
    public $Region;

    /**
     * @var string 
     */
    public $Object;

    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @var integer 
     */
    public $VodBasic;

    /**
     * @var string 
     */
    public $FileId;

    /**
     * @param string $Bucket 
     * @param string $Region 
     * @param string $Object 
     * @param integer $SubAppId 
     * @param integer $VodBasic 
     * @param string $FileId 
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
        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Object",$param) and $param["Object"] !== null) {
            $this->Object = $param["Object"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("VodBasic",$param) and $param["VodBasic"] !== null) {
            $this->VodBasic = $param["VodBasic"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }
    }
}
