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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Slow log details
 *
 * @method string getName() Obtain Backup filename
 * @method void setName(string $Name) Set Backup filename
 * @method integer getSize() Obtain Backup file size in bytes
 * @method void setSize(integer $Size) Set Backup file size in bytes
 * @method string getDate() Obtain Backup snapshot time in the format of yyyy-MM-dd HH:mm:ss, such as 2016-03-17 02:10:37
 * @method void setDate(string $Date) Set Backup snapshot time in the format of yyyy-MM-dd HH:mm:ss, such as 2016-03-17 02:10:37
 * @method string getIntranetUrl() Obtain Download address on the private network
 * @method void setIntranetUrl(string $IntranetUrl) Set Download address on the private network
 * @method string getInternetUrl() Obtain Download address on the public network
 * @method void setInternetUrl(string $InternetUrl) Set Download address on the public network
 * @method string getType() Obtain Log type. Value range: slowlog (slow log)
 * @method void setType(string $Type) Set Log type. Value range: slowlog (slow log)
 */
class SlowLogInfo extends AbstractModel
{
    /**
     * @var string Backup filename
     */
    public $Name;

    /**
     * @var integer Backup file size in bytes
     */
    public $Size;

    /**
     * @var string Backup snapshot time in the format of yyyy-MM-dd HH:mm:ss, such as 2016-03-17 02:10:37
     */
    public $Date;

    /**
     * @var string Download address on the private network
     */
    public $IntranetUrl;

    /**
     * @var string Download address on the public network
     */
    public $InternetUrl;

    /**
     * @var string Log type. Value range: slowlog (slow log)
     */
    public $Type;

    /**
     * @param string $Name Backup filename
     * @param integer $Size Backup file size in bytes
     * @param string $Date Backup snapshot time in the format of yyyy-MM-dd HH:mm:ss, such as 2016-03-17 02:10:37
     * @param string $IntranetUrl Download address on the private network
     * @param string $InternetUrl Download address on the public network
     * @param string $Type Log type. Value range: slowlog (slow log)
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("IntranetUrl",$param) and $param["IntranetUrl"] !== null) {
            $this->IntranetUrl = $param["IntranetUrl"];
        }

        if (array_key_exists("InternetUrl",$param) and $param["InternetUrl"] !== null) {
            $this->InternetUrl = $param["InternetUrl"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
