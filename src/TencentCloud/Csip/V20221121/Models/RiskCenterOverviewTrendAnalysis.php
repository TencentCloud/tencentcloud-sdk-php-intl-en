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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Risk trend
 *
 * @method string getDate() Obtain Date
 * @method void setDate(string $Date) Set Date
 * @method integer getPort() Obtain Number of ports
 * @method void setPort(integer $Port) Set Number of ports
 * @method integer getVUL() Obtain Number of vulnerabilities
 * @method void setVUL(integer $VUL) Set Number of vulnerabilities
 * @method integer getWeakPassword() Obtain Weak Password Count
 * @method void setWeakPassword(integer $WeakPassword) Set Weak Password Count
 * @method integer getWebsite() Obtain Number of Websites
 * @method void setWebsite(integer $Website) Set Number of Websites
 * @method integer getCFG() Obtain Number of Configurations
 * @method void setCFG(integer $CFG) Set Number of Configurations
 * @method integer getServer() Obtain Mapping Risk Count
 * @method void setServer(integer $Server) Set Mapping Risk Count
 * @method integer getHostCFG() Obtain Number of host risk configurations
 * @method void setHostCFG(integer $HostCFG) Set Number of host risk configurations
 * @method integer getPodCFG() Obtain Number of risk configurations in the container baseline
 * @method void setPodCFG(integer $PodCFG) Set Number of risk configurations in the container baseline
 */
class RiskCenterOverviewTrendAnalysis extends AbstractModel
{
    /**
     * @var string Date
     */
    public $Date;

    /**
     * @var integer Number of ports
     */
    public $Port;

    /**
     * @var integer Number of vulnerabilities
     */
    public $VUL;

    /**
     * @var integer Weak Password Count
     */
    public $WeakPassword;

    /**
     * @var integer Number of Websites
     */
    public $Website;

    /**
     * @var integer Number of Configurations
     */
    public $CFG;

    /**
     * @var integer Mapping Risk Count
     */
    public $Server;

    /**
     * @var integer Number of host risk configurations
     */
    public $HostCFG;

    /**
     * @var integer Number of risk configurations in the container baseline
     */
    public $PodCFG;

    /**
     * @param string $Date Date
     * @param integer $Port Number of ports
     * @param integer $VUL Number of vulnerabilities
     * @param integer $WeakPassword Weak Password Count
     * @param integer $Website Number of Websites
     * @param integer $CFG Number of Configurations
     * @param integer $Server Mapping Risk Count
     * @param integer $HostCFG Number of host risk configurations
     * @param integer $PodCFG Number of risk configurations in the container baseline
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
        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("VUL",$param) and $param["VUL"] !== null) {
            $this->VUL = $param["VUL"];
        }

        if (array_key_exists("WeakPassword",$param) and $param["WeakPassword"] !== null) {
            $this->WeakPassword = $param["WeakPassword"];
        }

        if (array_key_exists("Website",$param) and $param["Website"] !== null) {
            $this->Website = $param["Website"];
        }

        if (array_key_exists("CFG",$param) and $param["CFG"] !== null) {
            $this->CFG = $param["CFG"];
        }

        if (array_key_exists("Server",$param) and $param["Server"] !== null) {
            $this->Server = $param["Server"];
        }

        if (array_key_exists("HostCFG",$param) and $param["HostCFG"] !== null) {
            $this->HostCFG = $param["HostCFG"];
        }

        if (array_key_exists("PodCFG",$param) and $param["PodCFG"] !== null) {
            $this->PodCFG = $param["PodCFG"];
        }
    }
}
