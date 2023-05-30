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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * COS bucket parameters for storing whiteboard snapshots.
 *
 * @method integer getUin() Obtain UIN of the Tencent Cloud account.
 * @method void setUin(integer $Uin) Set UIN of the Tencent Cloud account.
 * @method string getRegion() Obtain COS region.
 * @method void setRegion(string $Region) Set COS region.
 * @method string getBucket() Obtain COS bucket name.
 * @method void setBucket(string $Bucket) Set COS bucket name.
 * @method string getTargetDir() Obtain Root directory for storing whiteboard snapshots.
 * @method void setTargetDir(string $TargetDir) Set Root directory for storing whiteboard snapshots.
 * @method string getDomain() Obtain CDN acceleration domain name.
 * @method void setDomain(string $Domain) Set CDN acceleration domain name.
 */
class SnapshotCOS extends AbstractModel
{
    /**
     * @var integer UIN of the Tencent Cloud account.
     */
    public $Uin;

    /**
     * @var string COS region.
     */
    public $Region;

    /**
     * @var string COS bucket name.
     */
    public $Bucket;

    /**
     * @var string Root directory for storing whiteboard snapshots.
     */
    public $TargetDir;

    /**
     * @var string CDN acceleration domain name.
     */
    public $Domain;

    /**
     * @param integer $Uin UIN of the Tencent Cloud account.
     * @param string $Region COS region.
     * @param string $Bucket COS bucket name.
     * @param string $TargetDir Root directory for storing whiteboard snapshots.
     * @param string $Domain CDN acceleration domain name.
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("TargetDir",$param) and $param["TargetDir"] !== null) {
            $this->TargetDir = $param["TargetDir"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }
    }
}
